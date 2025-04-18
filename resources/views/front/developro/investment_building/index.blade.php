@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name.' - '.$building->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main>
        <section class="position-relative page-hero-section page-hero-section-small">
            <div class="position-absolute top-0 start-0 w-100 h-100">
                @if($investment->file_header)
                    <img src="{{ asset('investment/header/'.$investment->file_header) }}" alt="" width="1920" height="386" loading="eager" decoding="async" class="w-100 h-100 object-fit-cover">
                    <div style="position: absolute;opacity: 0.7;width: 100%;height: 100%;top: 0;left: 0;background-image: linear-gradient(#000, rgba(255, 255, 255, 0) {{ $investment->gradient_header ?: '100%' }});"></div>
                @else
                    <div style="position: absolute;width: 100%;height: 100%;top: 0;left: 0;background:#052748"></div>
                @endif
            </div>
            <div class="container isolation-isolate">
                <div class="row row-gap-10">
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
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $building->name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                        @isset($investment->name)
                            <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">{{ $investment->name }}</h1>
                        @endisset
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">{{ $building->name }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div id="planNav" class="row">
                    <div class="col-6 col-sm-4">
                        @if($prev_building)
                            <a href="{{route('developro.building', [$investment->slug, $prev_building, 'buildingSlug' => Str::slug($prev_building->name)])}}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                                <svg class="me-2 me-sm-3 me-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(362.073 -672.938) rotate(180)" fill="currentColor"></path>
                                </svg>
                                {{$prev_building->name}}
                            </a>
                        @endif
                    </div>

                    <div class="col-12 col-sm-4 text-center order-first order-sm-0">
                        <a href="{{route('developro.plan', $investment->slug)}}" class="btn btn-outline-primary" style="--bs-btn-hover-color: var(--bs-white);">Plan inwestycji</a>
                    </div>

                    <div class="col-6 col-sm-4 text-end">
                        @if($next_building)
                            <a href="{{route('developro.building', [$investment->slug, $next_building, 'buildingSlug' => Str::slug($next_building->name)])}}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                                {{$next_building->name}}
                                <svg class="ms-2 ms-sm-3 ms-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        @if($investment->show_properties == 1)
                            @if($building->file)
                                <div id="plan-holder">
                                    <img src="{{ asset('/investment/building/'.$building->file.'') }}" alt="{{$building->name}}" id="invesmentplan" usemap="#invesmentplan" class="w-100 h-100 object-fit-cover rounded">

                                    <map name="invesmentplan">
                                        @foreach($investment->buildingFloors as $floor)
                                            @if($floor->html)
                                                <area shape="poly" href="{{route('developro.building.floor', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name), $floor, 'floorSlug' => Str::slug($floor->name)])}}?status=1#plan" data-item="{{$floor->id}}" title="{{$floor->name}}" alt="floor-{{$floor->id}}" data-floornumber="{{$floor->id}}" data-floortype="{{$floor->type}}" coords="{{cords($floor->html)}}">
                                            @endif
                                        @endforeach
                                    </map>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </section>

        @include('front.investments.single-investment-search', ['investment' => $investment->building, 'full' => 1, 'is_floor' => 1])

        <section id="properties">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav justify-content-end" role="tablist">
                            <li class="nav-item layout-switcher" role="presentation">
                                <button class="nav-link active opacity-25" id="list-layout" type="button" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="29" viewBox="0 0 34 29">
                                        <g id="list" opacity="1">
                                            <g id="Rectangle_441" data-name="Rectangle 441" transform="translate(0 24)" fill="#fff" stroke="currentColor" stroke-width="1">
                                                <rect width="34" height="5" rx="1" stroke="none" />
                                                <rect x="0.5" y="0.5" width="33" height="4" rx="0.5" fill="none" />
                                            </g>
                                            <g id="Rectangle_442" data-name="Rectangle 442" transform="translate(0 16)" fill="#fff" stroke="currentColor" stroke-width="1">
                                                <rect width="34" height="5" rx="1" stroke="none" />
                                                <rect x="0.5" y="0.5" width="33" height="4" rx="0.5" fill="none" />
                                            </g>
                                            <g id="Rectangle_443" data-name="Rectangle 443" fill="#fff" stroke="currentColor" stroke-width="1">
                                                <rect width="34" height="5" rx="1" stroke="none" />
                                                <rect x="0.5" y="0.5" width="33" height="4" rx="0.5" fill="none" />
                                            </g>
                                            <g id="Rectangle_444" data-name="Rectangle 444" transform="translate(0 8)" fill="#fff" stroke="currentColor" stroke-width="1">
                                                <rect width="34" height="5" rx="1" stroke="none" />
                                                <rect x="0.5" y="0.5" width="33" height="4" rx="0.5" fill="none" />
                                            </g>
                                        </g>
                                    </svg>

                                </button>
                            </li>
                            <li class="nav-item layout-switcher" role="presentation">
                                <button class="nav-link" id="grid-layout" type="button" aria-selected="false">
                                    <svg id="grid" xmlns="http://www.w3.org/2000/svg" width="34" height="29" viewBox="0 0 34 29">
                                        <g id="Rectangle_430" data-name="Rectangle 430" fill="#fff" stroke="currentColor" stroke-width="1">
                                            <rect width="15" height="7" rx="1" stroke="none" />
                                            <rect x="0.5" y="0.5" width="14" height="6" rx="0.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_433" data-name="Rectangle 433" transform="translate(0 11)" fill="#fff" stroke="currentColor" stroke-width="1">
                                            <rect width="15" height="7" rx="1" stroke="none" />
                                            <rect x="0.5" y="0.5" width="14" height="6" rx="0.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_435" data-name="Rectangle 435" transform="translate(0 22)" fill="#fff" stroke="currentColor" stroke-width="1">
                                            <rect width="15" height="7" rx="1" stroke="none" />
                                            <rect x="0.5" y="0.5" width="14" height="6" rx="0.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_431" data-name="Rectangle 431" transform="translate(19)" fill="#fff" stroke="currentColor" stroke-width="1">
                                            <rect width="15" height="7" rx="1" stroke="none" />
                                            <rect x="0.5" y="0.5" width="14" height="6" rx="0.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_432" data-name="Rectangle 432" transform="translate(19 11)" fill="#fff" stroke="currentColor" stroke-width="1">
                                            <rect width="15" height="7" rx="1" stroke="none" />
                                            <rect x="0.5" y="0.5" width="14" height="6" rx="0.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_434" data-name="Rectangle 434" transform="translate(19 22)" fill="#fff" stroke="currentColor" stroke-width="1">
                                            <rect width="15" height="7" rx="1" stroke="none" />
                                            <rect x="0.5" y="0.5" width="14" height="6" rx="0.5" fill="none" />
                                        </g>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-12">
                        <div id="layout-container" class="list-layout">
                            @foreach($properties as $p)
                                <x-property-list-item :p="$p"></x-property-list-item>
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
