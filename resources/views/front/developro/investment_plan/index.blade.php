@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main>
        <section class="position-relative page-hero-section">
            <div class="position-absolute top-0 start-0 w-100 h-100 with-image-overlay-gradient ">
                @if($investment->file_header)
                    <img src="{{ asset('investment/header/'.$investment->file_header) }}" alt="" width="1920" height="386" loading="eager" decoding="async" class="w-100 h-100 object-fit-cover">
                    <div style="position: absolute;opacity: 0.7;width: 100%;height: 100%;top: 0;left: 0;background-image: linear-gradient(#000, rgba(255, 255, 255, 0) {{ $investment->gradient_header ?: '100%' }});"></div>
                @else
                    <div style="position: absolute;width: 100%;height: 100%;top: 0;left: 0;background:#052748"></div>
                @endif
            </div>
            <div class="container isolation-isolate">
                <div class="row row-gap-30">
                    <div class="col-12">
                        <nav aria-label="breadcrumb small text-white" data-aos="fade" class="aos-init aos-animate">
                            <ol class="breadcrumb opacity-50">
                                <li class="breadcrumb-item">
                                    <a href="/" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Strona główna</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="{{ route('developro.show', $investment->slug) }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->name }}</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="{{ route('developro.plan', $investment->slug) }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Plan inwestycji</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                        @isset($investment->name)
                            <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">{{ $investment->name }}</h1>
                        @endisset
                        @isset($page->title_text)
                            <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">{{ $page->title_text }}</p>
                        @endisset
                    </div>
                </div>
            </div>
        </section>

        @include('front.developro.investment_shared.filtr', [$investment, $uniqueRooms, 'area_range' => $investment->area_range])

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        @include('front.investments.submenu', ['menuIds' => $investment->menu])
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if($investment->show_properties == 1)
                            @if($investment->plan)
                                <div id="plan-holder">
                                    <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">

                                    @if($investment->type == 1)
                                        <map name="invesmentplan">
                                            @if($investment->buildings)
                                                @foreach($investment->buildings as $building)
                                                    <area
                                                            shape="poly"
                                                            href="{{route('developro.building', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name)])}}"
                                                            alt="{{$building->slug}}"
                                                            data-item="{{$building->id}}" title="{{$building->name}}"
                                                            data-roomnumber="{{$building->number}}"
                                                            data-roomtype="{{$building->typ}}"
                                                            data-roomstatus="{{$building->status}}"
                                                            coords="@if($building->html) {{cords($building->html)}} @endif">
                                                @endforeach
                                            @endif
                                        </map>
                                    @endif

                                    @if($investment->type == 2)
                                        <map name="invesmentplan">
                                            @foreach($investment->floors as $floor)
                                                @if($floor->html)
                                                    <area
                                                            shape="poly"
                                                            href="{{route('developro.floor', [$investment->slug, $floor, 'floorSlug' => Str::slug($floor->name)])}}"
                                                            title="{{$floor->name}}"
                                                            alt="floor-{{$floor->id}}"
                                                            data-item="{{$floor->id}}"
                                                            data-floornumber="{{$floor->id}}"
                                                            data-floortype="{{$floor->type}}"
                                                            coords="{{cords($floor->html)}}">
                                                @endif
                                            @endforeach
                                        </map>
                                    @endif

                                    @if($investment->type == 3)
                                        <map name="invesmentplan">
                                            @if($investment->properties)
                                                @foreach($investment->properties as $house)
                                                    <area
                                                            shape="poly"
                                                            href="{{route('front.developro.house', [$investment->slug, $house])}}"
                                                            title="{{$house->name}}"
                                                            alt="{{$house->slug}}"
                                                            data-item="{{$house->id}}"
                                                            data-roomnumber="{{$house->number}}"
                                                            data-roomtype="{{$house->typ}}"
                                                            data-roomstatus="{{$house->status}}"
                                                            coords="@if($house->html) {{cords($house->html)}} @endif">
                                                @endforeach
                                            @endif
                                        </map>
                                    @endif
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row mt-30">
                    <div class="col-12">
                        <div class="row row-cols-1 row-gap-4">
                            @foreach($properties as $p)
                            <div class="col">
                                <div class="invest-card-list text-secondary d-flex column-gap-4 row-gap-3 position-relative align-items-center flex-wrap flex-xl-nowrap justify-content-between">
                                    <div class="col-xl-auto">
                                        <p class="h4 lh-1 mb-1">{{ $p->name }}</p>
                                        <p class="fw-bold fs-15 mb-0">{{ $investment->name }}</p>
                                        <p><small>Etap: I</small></p>
                                    </div>
                                    <div class="col-xl-auto d-flex column-gap-30 row-gap-3 align-items-center flex-wrap flex-lg-nowrap flex-fill justify-content-md-center">
                                        <div class="d-flex gap-2">
                                            <div>
                                                <img src="{{ asset('img/location.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13">
                                            </div>
                                            <div>{{ $investment->city->name }}</div>
                                        </div>
                                        <div class="vr" style="color:#DFDEDE;"></div>
                                        <div class="fs-13 d-flex gap-2">
                                            <div>
                                                <img src="{{ asset('img/tile.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13">
                                            </div>
                                            <div>{{ $p->floor->name }}</div>
                                        </div>
                                        <div class="vr" style="color:#DFDEDE;"></div>
                                        <div class="fs-13 d-flex gap-2">
                                            <div>
                                                <img src="{{ asset('img/blueprint.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13">
                                            </div>
                                            <div>{{ $p->area }} m<sup>2</sup></div>
                                        </div>
                                        <div class="vr" style="color:#DFDEDE;"></div>
                                        <div class="fs-13 d-flex gap-2">
                                            <div>
                                                <img src="{{ asset('img/rooms.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13">
                                            </div>
                                            <div>{{ $p->rooms }}</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 text-lg-center">
                                        <?php if ($p->status == 3) : ?>
                                        <p class="text-danger text-uppercase fw-bold fs-5 mb-0">Sprzedany</p>
                                        <?php elseif ($p->status == 1) : ?>
                                        <p class="text-success text-uppercase fw-bold fs-5 mb-0">Dostępny</p>
                                        <?php else : ?>
                                        <p class="text-warning text-uppercase fw-bold fs-5 mb-0">Rezerwacja</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="position-relative z-2 col-xl-auto">
                                        <a class="btn btn-primary btn-with-icon text-nowrap" href="#">Sprawdź<svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" /></svg></a>
                                    </div>
                                    <a class="stretched-link d-contents" href="#"></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
@endpush