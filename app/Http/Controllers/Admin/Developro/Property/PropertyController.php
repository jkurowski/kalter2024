<?php

namespace App\Http\Controllers\Admin\Developro\Property;

use App\Http\Controllers\Controller;

//CMS
use App\Http\Requests\PropertyFormRequest;
use App\Jobs\EndPropertyPromotion;
use App\Repositories\InvestmentRepository;
use App\Repositories\PropertyRepository;
use App\Services\PropertyService;
use Illuminate\Http\Request;

use App\Models\Floor;
use App\Models\Investment;
use App\Models\Property;
use App\Models\PropertyProperty;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    private PropertyRepository $repository;
    private PropertyService $service;
    private InvestmentRepository $investmentRepository;

    public function __construct(PropertyRepository $repository, PropertyService $service, InvestmentRepository $investmentRepository)
    {
//        $this->middleware('permission:box-list|box-create|box-edit|box-delete', [
//            'only' => ['index','store']
//        ]);
//        $this->middleware('permission:box-create', [
//            'only' => ['create','store']
//        ]);
//        $this->middleware('permission:box-edit', [
//            'only' => ['edit','update']
//        ]);
//        $this->middleware('permission:box-delete', [
//            'only' => ['destroy']
//        ]);

        $this->repository = $repository;
        $this->service = $service;
        $this->investmentRepository = $investmentRepository;
    }

    public function index(Investment $investment, Floor $floor)
    {
        $list = $investment->load(array(
            'floorRooms' => function($query) use ($floor)
            {
                $query->where('floor_id', $floor->id);
            }
        ));

        return view('admin.developro.investment_property.index', [
            'investment' => $investment,
            'floor' => $floor,
            'list' => $list,
            'count_property_status' => $list->floorRooms->countBy('status')
        ]);
    }

    public function create(Investment $investment, Floor $floor)
    {
        return view('admin.developro.investment_property.form', [
            'cardTitle' => 'Dodaj powierzchnię',
            'backButton' => route('admin.developro.investment.properties.index', [$investment, $floor]),
            'floor' => $floor,
            'investment' => $investment,
        ])->with('entry', Property::make());
    }

    public function store(PropertyFormRequest $request, Investment $investment, Floor $floor)
    {

        $property = $this->repository->create(array_merge($request->validated(), [
            'investment_id' => $investment->id,
            'floor_id' => $floor->id
        ]));

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $property);
        }

        if ($request->hasFile('file_pdf')) {
            $this->service->uploadPdf($request->name, $request->file('file_pdf'), $property);
        }

        return redirect(route('admin.developro.investment.properties.index', [$investment, $floor]))->with('success', 'Powierzchnia zapisana');
    }

    public function edit(Investment $investment, Floor $floor, Property $property)
    {
        // Get all properties for the investment except the current property
        $others = Property::where('id', '<>', $property->id)
            ->where('investment_id', '=', $investment->id)
            //->where('type', '<>', 1)
            ->pluck('name', 'id');

        $related = $property->relatedProperties;

        return view('admin.developro.investment_property.form', [
            'cardTitle' => 'Edytuj powierzchnię',
            'backButton' => route('admin.developro.investment.properties.index', [$investment, $floor]),
            'floor' => $floor,
            'investment' => $investment,
            'entry' => $property,
            'others' => $others,
            'related' => $related
        ]);
    }

    public function update(PropertyFormRequest $request, Investment $investment, Floor $floor, Property $property)
    {
        $this->repository->update($request->validated(), $property);

        if ($request->hasFile('file')) {
            $this->service->upload($request->name, $request->file('file'), $property, true);
        }

        if ($request->hasFile('file_pdf')) {
            $this->service->uploadPdf($request->name, $request->file('file_pdf'), $property, true);
        }

        // Dispatch the EndPropertyPromotion job if the promotion end date is set
        if ($request->filled('promotion_end_date') && $request->highlighted == 1) {
//            $promotionEndDate = $request->input('promotion_end_date');
//            $delay = now()->diffInSeconds($promotionEndDate, false);
//
//            if ($delay > 0) {  // Only dispatch if the end date is in the future
//                EndPropertyPromotion::dispatch($property)->delay($delay);
//            }

            $delay = now()->addSeconds(3600);  // Delay for 1 minute for testing
            EndPropertyPromotion::dispatch($property->id)->delay($delay);
        }

        $this->investmentRepository->sendMessageToInvestmentSupervisors($investment, 'Zmiana parametrów: '.$property->name);

        return redirect(route('admin.developro.investment.properties.index', [$investment, $floor]))->with('success', 'Powierzchnia zaktualizowana');
    }

    public function destroy(Investment $investment, Floor $floor, int $id)
    {
        $this->repository->delete($id);
        return response()->json('Deleted');
    }

    public function fetchProperties(Investment $investment) {
        $properties = $investment->selectProperties()->get();
        $types = $properties->groupBy('type');
        $result = [];
        foreach ($types as $type => $properties) {
            $result[$type] = $properties;
        }
        return response()->json($result);
    }

    public function storerelated(Request $request, $investmentId, $floorId, $propertyId)
    {
        $request->validate([
            'related_property_id' => 'required|exists:properties,id',
        ]);

        $related_id = $request->input('related_property_id');

        $isRelated = PropertyProperty::where('related_property_id', $related_id)->exists();
        $related_property = Property::findOrFail($related_id);

        if ($isRelated) {
            return getRelatedType($related_property->type);
        }

        $property = Property::findOrFail($propertyId);
        $property->relatedProperties()->attach($related_id);

        // Return a response
        return view('admin.developro.investment_shared.related', ['property' => $related_property]);
    }

    public function convert(){
        // Fetch data from the old table
        $old = DB::connection('old_mysql')->table('inwestycje_powierzchnia')->orderBy('id')->get();

        // Define the default locale
        $defaultLocale = 'pl';

        foreach ($old as $o) {

            $entry = new Property();

            $entry->fill([
                'id' => $o->id,
                'building_id' => $o->id_budynek ?? null,
                'investment_id' => $o->id_inwest ?? null,
                'floor_id' => $o->id_pietro ?? null,
                'status' => $o->status ?? 1,
                'number' => $o->numer ?? 0,
                'number_order' => $o->order_numer ?? 0,
                'rooms' => $o->pokoje ?? 0,
                'area' => $o->metry ?? 0,
                'area_search' => $o->szukaj_metry ?? null,
                'price' => $o->cena ?? null,
                'promotion_price' => $o->cena_promocja ?? null,
                'highlighted' => $o->promocja ?? null,
                'type' => $o->typ ?? null,

                'html' => $o->html ?? null,
                'cords' => $o->cords ?? null,
                'file' => $o->plik ?? null,
                'file_2' => $o->plik2 ?? null,
                'file_pdf' => $o->pdf ?? null,
                'walk_3d' => $o->spacer_3d ?? null,
                'model_3d' => $o->model_3d ?? null,

                'terrace_area' => $o->taras ?? null,
                'garden_area' => $o->ogrodek ?? null,
                'balcony_area' => $o->balkon ?? null,
                'loggia_area' => $o->loggia ?? null,
                'window' => $o->okno ?? null,
                'for_investor' => $o->for_investor ?? 0,
                'for_show' => $o->pokazowe ?? 0,
                'kitchen' => $o->kuchnia ?? 0,
                'commercial' => $o->uslugowy ?? 0,
                'storage' => $o->komorka ?? 0,

                'active' => 1,

                'meta_robots' => ''
            ]);

            $entry->setTranslation('name', $defaultLocale, $o->nazwa);
            $entry->setTranslation('name_list', $defaultLocale, $o->nazwa_lista);
            $entry->setTranslation('meta_title', $defaultLocale, $o->meta_tytul);
            $entry->setTranslation('meta_description', $defaultLocale, $o->meta_opis);
            $entry->save();
        }

        return redirect(route('admin.developro.investment.index'))->with('success', 'Mieszkania przetłumaczone');
    }
}