@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name.' - '.$floor->name)
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
                                    <a href="/"
                                       style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Strona
                                        główna</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="{{ route('developro.show', $investment->slug) }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->name }}</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="{{route('developro.building', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name)])}}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $building->name }}</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                     <a href="{{route('developro.building.floor', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name), $floor, 'floorSlug' => Str::slug($floor->name)])}}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">
                                            {{ $floor->name }}
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                        @isset($investment->name)
                            <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">{{ $investment->name }}</h1>
                        @endisset
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">{{ $building->name }} - {{ $floor->name }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="single-investment-search search section-search d-none">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <form action="" class="bg-secondary text-white rounded d-flex row-gap-0 flex-wrap flex-sm-nowrap search-form" autocomplete="off">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 row-gap-3 align-items-end px-30 py-3 w-md-100 pb-md-40 pb-20">
                                <p class="col-12 w-100 text-uppercase mb-0">Wyszukiwarka</p>
                                <div class="col-12 w-100">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="showAll">
                                        <label class="form-check-label" for="showAll">
                                            Pokaż wszystkie
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <select name="step" id="step" class="form-select">
                                        <option value="0" selected>Etap</option>
                                        <option value="1">I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="city" id="city" class="form-select">
                                        <option value="0" selected>Miasto</option>
                                        <option value="Warszawa">Warszawa</option>
                                        <option value="Krakow">Krakow</option>
                                        <option value="Wroclaw">Wroclaw</option>
                                        <option value="Poznan">Poznan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="rooms" id="rooms" class="form-select">
                                        <option value="0" selected>Pokoje</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="garden" id="garden" class="form-select">
                                        <option value="0" selected>Ogródek</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="terrace" id="terrace" class="form-select">
                                        <option value="0" selected>Taras</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>

                            </div>
                            <div class="flex-fill">
                                <button type="submit" class="btn btn-primary w-100 h-100 fs-14 text-uppercase px-sm-4 d-flex align-items-center justify-content-center flex-sm-column gap-2 gap-sm-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.631" height="21.636" viewBox="0 0 21.631 21.636">
                                        <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M25.877,24.563l-6.016-6.072a8.573,8.573,0,1,0-1.3,1.318l5.977,6.033a.926.926,0,0,0,1.307.034A.932.932,0,0,0,25.877,24.563ZM13.124,19.882A6.77,6.77,0,1,1,17.912,17.9,6.728,6.728,0,0,1,13.124,19.882Z" transform="translate(-4.5 -4.493)" fill="#fff" />
                                    </svg>
                                    <span>
                                Szukaj
                            </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div id="planNav" class="row">
                    <div class="col-6 col-sm-4">
                        @if($prev_floor)
                            <a href="{{route('developro.building.floor', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name), $prev_floor, 'floorSlug' => Str::slug($prev_floor->name)])}}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                                <svg class="me-2 me-sm-3 me-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(362.073 -672.938) rotate(180)" fill="currentColor"></path>
                                </svg>
                                {{$prev_floor->name}}
                            </a>
                        @endif
                    </div>

                    <div class="col-12 col-sm-4 text-center order-first order-sm-0">

                        <a href="{{route('developro.building', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name)])}}" class="btn btn-outline-primary" style="--bs-btn-hover-color: var(--bs-white);">Plan budunku</a>

                    </div>

                    <div class="col-6 col-sm-4 text-end">
                        @if($next_floor)
                            <a href="{{route('developro.building.floor', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name), $next_floor, 'floorSlug' => Str::slug($next_floor->name)])}}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                                {{$next_floor->name}}
                                <svg class="ms-2 ms-sm-3 ms-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if($floor->file)
                            <div id="plan-holder">
                                @if($floor->file_webp)
                                    <img src="{{ asset('/investment/floor/webp/'.$floor->file_webp) }}" alt="{{$floor->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">
                                @else
                                    <img src="{{ asset('/investment/floor/'.$floor->file) }}" alt="{{$floor->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">
                                @endif
                                <map name="invesmentplan">
                                    @if($properties)
                                        @foreach($properties as $r)
                                            @if($r->html)
                                                <area
                                                        shape="poly"
                                                        href="{{ route('developro.building.floor.property', [
                                                            $investment->slug,
                                                            $building,
                                                            Str::slug($building->name),
                                                            $r->floor,
                                                            Str::slug($floor->name),
                                                            $r,
                                                            Str::slug($r->name),
                                                            number2RoomsName($r->rooms, true),
                                                            round(floatval($r->area), 2).'-m2'
                                                        ]) }}"
                                                        data-item="{{$r->id}}"
                                                        title="{{$r->name}}<br>Powierzchnia: <b class=fr>{{$r->area}} m<sup>2</sup></b><br />Pokoje: <b class=fr>{{$r->rooms}}</b><br><b>{{ roomStatus($r->status) }}</b>"
                                                        alt="{{$r->slug}}"
                                                        data-roomnumber="{{$r->number}}"
                                                        data-roomtype="{{$r->typ}}"
                                                        data-roomstatus="{{$r->status}}"
                                                        coords="{{cords($r->html)}}"
                                                        class="inline status-{{$r->status}}"
                                                >
                                            @endif
                                        @endforeach
                                    @endif
                                </map>
                            </div>
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
                                                <div>{{ $floor->name }}</div>
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
                                            <a class="btn btn-primary btn-with-icon text-nowrap" href="{{ route('developro.building.floor.property', [
                                                            $investment->slug,
                                                            $building,
                                                            Str::slug($building->name),
                                                            $p->floor,
                                                            Str::slug($floor->name),
                                                            $p,
                                                            Str::slug($p->name),
                                                            number2RoomsName($p->rooms, true),
                                                            round(floatval($p->area), 2).'-m2'
                                                        ]) }}">Sprawdź<svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" /></svg></a>
                                        </div>
                                        <a class="stretched-list-link" href="{{ route('developro.building.floor.property', [
                                                            $investment->slug,
                                                            $building,
                                                            Str::slug($building->name),
                                                            $p->floor,
                                                            Str::slug($floor->name),
                                                            $p,
                                                            Str::slug($p->name),
                                                            number2RoomsName($p->rooms, true),
                                                            round(floatval($p->area), 2).'-m2'
                                                        ]) }}"></a>
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
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
@endpush