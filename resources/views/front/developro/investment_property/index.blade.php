@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name.' - '.$floor->name)
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
                                @isset($building->name)
                                    <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                        <a href="{{route('developro.building', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name)])}}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $building->name }}</a>
                                    </li>
                                @endisset
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    @if($investment->type == 1)
                                        <a href="{{route('developro.building.floor', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name), $floor, 'floorSlug' => Str::slug($floor->name)])}}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">
                                            {{ $floor->name }}
                                        </a>
                                    @endif
                                    @if($investment->type == 2)
                                        <a href="{{route('developro.floor', [$investment->slug, $floor, 'floorSlug' => Str::slug($floor->name)])}}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">
                                            {{ $floor->name }}
                                        </a>
                                    @endif
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                        @isset($investment->name)
                            <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">{{ $investment->name }}</h1>
                        @endisset
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">
                            @isset($building->name)
                                {{ $building->name }} -
                            @endisset
                            {{ $floor->name }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        @include('front.investments.submenu', ['menuIds' => $investment->menu])
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-40 pb-0">
            <div class="container">
                <div class="row row-gap-3 justify-content-between small">
                    <div class="col-6 col-sm-4">
                        @if($investment->type == 1 && $prev)
                        <a href="{{ route('developro.building.floor.property', [
                                                            $investment->slug,
                                                            $building,
                                                            Str::slug($building->name),
                                                            $prev->floor,
                                                            Str::slug($floor->name),
                                                            $prev,
                                                            Str::slug($prev->name),
                                                            number2RoomsName($prev->rooms, true),
                                                            round(floatval($prev->area), 2).'-m2'
                                                        ]) }}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center gap-1">
                            <svg class="me-2 me-sm-3 me-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(362.073 -672.938) rotate(180)" fill="currentColor" />
                            </svg>
                            Poprzednie
                        </a>
                        @endif

                        @if($investment->type == 2 && $prev)
                        <a href="{{ route('developro.property', [$investment->slug, $floor, Str::slug($floor->name), $prev, Str::slug($prev->name), number2RoomsName($prev->rooms, true), round(floatval($prev->area), 2).'-m2']) }}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center gap-1">
                            <svg class="me-2 me-sm-3 me-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(362.073 -672.938) rotate(180)" fill="currentColor" />
                            </svg>
                            Poprzednie
                        </a>
                        @endif
                    </div>
                    <div class="col-12 col-sm-4 text-center order-first order-sm-0">
                        @if($investment->type == 1)
                            <a href="{{route('developro.building.floor', [$investment->slug, $building, 'buildingSlug' => Str::slug($building->name), $floor, 'floorSlug' => Str::slug($floor->name)])}}" class="btn btn-outline-primary" style="--bs-btn-hover-color: var(--bs-white);">
                                Plan piętra
                            </a>
                        @endif
                        @if($investment->type == 2)
                            <a href="{{route('developro.floor', [$investment->slug, $floor, 'floorSlug' => Str::slug($floor->name)])}}" class="btn btn-outline-primary" style="--bs-btn-hover-color: var(--bs-white);">
                                Plan piętra
                            </a>
                        @endif
                    </div>
                    <div class="col-6 col-sm-4 text-end">
                        @if($investment->type == 1 && $next)
                        <a href="{{ route('developro.building.floor.property', [
                                                            $investment->slug,
                                                            $building,
                                                            Str::slug($building->name),
                                                            $next->floor,
                                                            Str::slug($next->name),
                                                            $next,
                                                            Str::slug($next->name),
                                                            number2RoomsName($next->rooms, true),
                                                            round(floatval($next->area), 2).'-m2'
                                                        ]) }}" class="btn btn-primary px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                            Następne
                            <svg class="ms-2 ms-sm-3 ms-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                            </svg>
                        </a>
                        @endif
                        @if($investment->type == 2 && $next)
                        <a href="{{ route('developro.property', [$investment->slug, $floor, Str::slug($floor->name), $next, Str::slug($next->name), number2RoomsName($next->rooms, true), round(floatval($next->area), 2).'-m2']) }}" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                            Następne
                            <svg class="ms-2 ms-sm-3 ms-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row row-gap-30">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="text-secondary">
                            <h2 class="mb-0">{{$property->name}}</h2>
                            <p class="text-uppercase fw-900 fs-15 ff-secondary mb-0 lh-1">{{$investment->name}}</p>
                            <p class="mb-20"><small>{{ investmentAdvanced($investment->progress) }}</small></p>

                            <?php if ($property->status == 3) : ?>
                            <p class="text-danger text-uppercase fw-bold fs-5">Sprzedany</p>
                            <?php elseif ($property->status == 1) : ?>
                            <p class="text-success text-uppercase fw-bold fs-5">Dostępny</p>
                            <?php else : ?>
                            <p class="text-warning text-uppercase fw-bold fs-5">Rezerwacja</p>
                            <?php endif; ?>

                            @if($investment->show_prices)
                                <p class="h4 mb-1 d-flex flex-wrap align-items-center column-gap-3 ff-secondary">
                                    @if($property->price && !$property->highlighted)
                                        <span class="fs-24">@money($property->price)</span>
                                    @else
                                        @if($property->promotion_price)
                                            <span class="fs-24">@money($property->promotion_price)</span>
                                            <span class="fs-24">Rabat: @money($property->price - $property->promotion_price)</span>
                                        @endif
                                        @if($property->price)
                                            <span class="text-body-emphasis opacity-50 fs-6 align-middle text-decoration-line-through">@money($property->price)</span>
                                        @endif
                                    @endif
                                </p>
                                @if($property->price_30)
                                    <p class="fs-10 text-black mb-0">
                                        Najniższa cena z ostatnich 30 dni: @money($property->price_30)
                                    </p>
                                @endif
                            @endif
                            <div class="mb-50 mt-4">
                                <table class="text-sm-down-small w-100">
                                    <tbody>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="{{ asset('img/tile.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Piętro</td>
                                        <td class="text-end pb-2">{{$floor->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="{{ asset('img/blueprint.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Metraż</td>
                                        <td class="text-end pb-2">{{$property->area}} m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="{{ asset('img/rooms.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Liczba Pokoi</td>
                                        <td class="text-end pb-2">{{$property->rooms}}</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="{{ asset('img/kitchen.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Aneks/Kuchnia</td>
                                        <td class="text-end pb-2">Aneks kuchenny</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="{{ asset('img/window.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Wystawa okienna</td>
                                        <td class="text-end pb-2">Południe wschód</td>
                                    </tr>
                                    @if($property->terrace_area)
                                        <tr>
                                            <td class="td-with-icon pb-2"><img src="{{ asset('img/terrace.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                            <td class="pb-2">Taras</td>
                                            <td class="text-end pb-2">{{$property->terrace_area}} m<sup>2</sup></td>
                                        </tr>
                                    @endif
                                    @if($property->garden_area)
                                        <tr>
                                            <td class="td-with-icon pb-2"><img src="{{ asset('img/shovels.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                            <td class="pb-2">Ogródek</td>
                                            <td class="text-end pb-2">{{$property->garden_area}} m<sup>2</sup></td>
                                        </tr>
                                    @endif
                                    @if($property->balcony_area)
                                        <tr>
                                            <td class="td-with-icon pb-2"><img src="{{ asset('img/shovels.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                            <td class="pb-2">Balkon</td>
                                            <td class="text-end pb-2">{{$property->balcony_area}} m<sup>2</sup></td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#kontakt" class="btn btn-primary btn-with-icon px-3 min-w-max-content flex-fill d-inline-flex align-items-center justify-content-center gap-1">Zapytaj o ofertę <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" /></svg>
                                </a>

                                @if($property->file_pdf)
                                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" class="btn btn-primary btn-with-icon d-inline-flex align-items-center gap-1 justify-content-center px-3 min-w-max-content flex-fill" target="_blank">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="11.109" height="12.96" viewBox="0 0 11.109 12.96">
                                            <path id="Icon_metro-file-pdf" data-name="Icon metro-file-pdf" d="M13.188,4.952a1.683,1.683,0,0,1,.347.55,1.669,1.669,0,0,1,.145.636V14.47a.691.691,0,0,1-.694.694H3.265a.691.691,0,0,1-.694-.694V2.9A.691.691,0,0,1,3.265,2.2h6.48a1.67,1.67,0,0,1,.636.145,1.683,1.683,0,0,1,.55.347ZM9.977,3.187V5.906H12.7a.79.79,0,0,0-.159-.3L10.273,3.346a.79.79,0,0,0-.3-.159Zm2.777,11.051V6.832H9.745a.691.691,0,0,1-.694-.694V3.129H3.5V14.238h9.257ZM9.036,9.949a5.5,5.5,0,0,0,.608.405,7.177,7.177,0,0,1,.846-.051q1.063,0,1.28.354a.35.35,0,0,1,.014.376.021.021,0,0,1-.007.014l-.014.014v.007q-.043.275-.513.275a2.983,2.983,0,0,1-.832-.145,5.274,5.274,0,0,1-.94-.383,13.023,13.023,0,0,0-2.835.6q-1.107,1.895-1.75,1.895a.421.421,0,0,1-.2-.051l-.174-.087-.043-.036a.3.3,0,0,1-.043-.26,1.571,1.571,0,0,1,.405-.662,3.5,3.5,0,0,1,.955-.7.106.106,0,0,1,.166.043.042.042,0,0,1,.014.029q.376-.615.774-1.425A11.038,11.038,0,0,0,7.5,8.271a5.846,5.846,0,0,1-.221-1.154A2.812,2.812,0,0,1,7.322,6.2q.08-.289.3-.289h.159a.3.3,0,0,1,.253.108.578.578,0,0,1,.065.492.157.157,0,0,1-.029.058.188.188,0,0,1,.007.058v.217a9.471,9.471,0,0,1-.1,1.389A3.659,3.659,0,0,0,9.036,9.949ZM4.871,12.922a3.193,3.193,0,0,0,.991-1.143,4.123,4.123,0,0,0-.633.608A2.4,2.4,0,0,0,4.871,12.922ZM7.749,6.268a2.151,2.151,0,0,0-.014.955q.007-.051.051-.318,0-.022.051-.311a.163.163,0,0,1,.029-.058.021.021,0,0,1-.007-.014.015.015,0,0,0,0-.011.015.015,0,0,1,0-.011.416.416,0,0,0-.094-.26.021.021,0,0,1-.007.014v.014Zm-.9,4.781a10.608,10.608,0,0,1,2.054-.586,1.091,1.091,0,0,1-.094-.069,1.3,1.3,0,0,1-.116-.1,3.831,3.831,0,0,1-.918-1.273,9.665,9.665,0,0,1-.6,1.425q-.217.405-.325.6Zm4.672-.116a1.731,1.731,0,0,0-1.013-.174,2.736,2.736,0,0,0,.9.2.7.7,0,0,0,.13-.007s0-.012-.014-.022Z" transform="translate(-2.571 -2.203)" fill="#fff" />
                                        </svg>

                                        Pobierz kartę
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                        </svg>
                                    </a>
                                @endif
                                @if($property->walk_3d)
                                    {!! $property->walk_3d !!}
                                @endif

                                <!--
                                <a href="/kontakt.php" class="btn btn-primary btn-with-icon d-inline-flex align-items-center gap-1 justify-content-center px-3 min-w-max-content flex-fill">
                                -->
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-md-6 offset-lg-1 order-first order-md-0">
                        @if($property->file && $property->model_3d)
                        <ul class="nav justify-content-center justify-content-md-end mb-4 mb-sm-30 gap-30" role="tablist">
                            @if($property->model_3d)
                                <li class="nav-item tab-switcher" role="presentation">
                                    <button class="nav-link active tab-switcher-button-shadow" id="btn-3d" data-bs-toggle="tab" data-bs-target="#btn-3d-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="true">Rzut 3D</button>
                                </li>
                            @endif
                            @if($property->file)
                                <li class="nav-item tab-switcher" role="presentation">
                                    <button class="nav-link tab-switcher-button-shadow" id="btn-2d" data-bs-toggle="tab" data-bs-target="#btn-2d-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="false">Plan</button>
                                </li>
                            @endif
                        </ul>
                        @endif
                        <div class="tab-content">
                            @if($property->model_3d)
                                <div class="tab-pane fade show active" id="btn-3d-pane" role="tabpanel" aria-labelledby="btn-3d" tabindex="0">
                                    <div class="w-100 h-100">
                                        <div class="ratio ratio-4x3">
                                            {!! createIframeFromButton($property->model_3d) !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($property->file)
                                <div class="tab-pane fade @if(!$property->model_3d) show active @endif" id="btn-2d-pane" role="tabpanel" aria-labelledby="btn-2d" tabindex="0">
                                    <div class="w-100 h-100">
                                        <a href="{{ asset('/investment/property/'.$property->file) }}" class="glightbox">
                                            <picture>
                                                @if($property->file_webp)
                                                    <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                                @endif
                                                <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                                <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}" class="w-100">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="kontakt">
            @include('layouts.partials.cta', ['pageTitle' => $property->name, 'propertyId' => $property->id, 'investmentName' => $investment->name, 'investmentId' => $investment->id, 'back' => true, 'sectionTitle' => $property->name, 'sectionSubTitle' => 'Wyślij zapytanie' ])
        </div>

        @if($property->text)
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-3 pb-5">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">Opis mieszkania</span>
                                    <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">{{ $investment->name }}</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-12">
                            {!! parse_text($property->text, true) !!}
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Podobne mieszkania -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Sprawdź
                            </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                Podobne mieszkania
                            </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $slider_options = [
                'arrows' => false,
                'mobileFirst' => true,
                'centerMode' => true,
                'slidesToShow' => 1,
                'centerPadding' => '15px',
                'responsive' => [
                    [
                        'breakpoint' => 576,
                        'settings' => [
                            'centerPadding' => '10%',
                        ]
                    ],
                    [
                        'breakpoint' => 768,
                        'settings' => [
                            'centerPadding' => '15%',
                        ]
                    ],
                    [
                        'breakpoint' => 1199,
                        'settings' => [
                            'centerPadding' => 'calc(505 / 1920 * 100vw)',
                        ]
                    ]
                ]
            ];
            ?>
            <div class="invests-horizontal-slider mt-4" data-slick='<?= json_encode($slider_options) ?>'>
                @foreach($similarProperties as $p)
                    <div>
                        <div class="invest-card-horizontal position-relative d-flex flex-column-reverse flex-sm-row justify-content-between  bg-white">
                            <a href="{{ route('developro.property', [$investment->slug, $p->floor, Str::slug($p->floor->name), $p, Str::slug($p->name), number2RoomsName($p->rooms, true), round(floatval($p->area), 2).'-m2']) }}" class="stretched-link"></a>
                            <div class="text-secondary invest-card-horizontal-left flex-fill">
                                <p class="h3 mb-0">{{ $p->name }}</p>
                                <p class="fs-10 text-uppercase fw-900 mb-2">{{ $investment->name }}</p>
                                <p class="h3 mb-1">
                                    @if($p->price && !$p->highlighted)
                                        <span class="me-2">@money($p->price)</span>
                                    @else
                                        @if($p->promotion_price)
                                            <span class="me-2">@money($p->promotion_price)</span>
                                        @endif
                                        @if($p->price)
                                            <span class="text-body-emphasis opacity-50 fs-6 align-middle text-decoration-line-through">@money($p->price)</span>
                                        @endif
                                    @endif
                                </p>
                                @if($p->price_30)
                                    <p class="fs-8 text-black">
                                        Najniższa cena z ostatnich 30 dni: @money($p->price_30)
                                    </p>
                                @endif
                                <div class="small mb-40">
                                    <table class="w-100">
                                        <tbody>
                                        <tr>
                                            <td class="td-with-icon">
                                                <img src="{{ asset('img/tile.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12">
                                            </td>
                                            <td>Piętro</td>
                                            <td class="text-end">{{ $p->floor->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="td-with-icon">
                                                <img src="{{ asset('img/blueprint.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12">
                                            </td>
                                            <td>Metraż</td>
                                            <td class="text-end">{{ $p->area }} m<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <td class="td-with-icon">
                                                <img src="{{ asset('img/rooms.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12">
                                            </td>
                                            <td>Liczba Pokoi</td>
                                            <td class="text-end">{{ $p->rooms }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="position-relatieve z-2">
                                    <a class="btn btn-primary btn-with-icon " href="{{ route('developro.property', [$investment->slug, $p->floor, Str::slug($p->floor->name), $p, Str::slug($p->name), number2RoomsName($p->rooms, true), round(floatval($p->area), 2).'-m2']) }}">
                                        Sprawdź
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" /></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="invest-card-horizontal-right">
                                @if($p->file)
                                    <picture>
                                        @if($p->file_webp)
                                            <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$p->file_webp) }}">
                                        @endif
                                        <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$p->file) }}">
                                        <img src="{{ asset('/investment/property/thumbs/'.$p->file) }}" alt="{{$p->name}}" loading="lazy" decoding="async" class="w-100 h-100 object-fit-contain">
                                    </picture>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/tip.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/floor.js') }}" charset="utf-8"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const anchor = document.querySelector('.widget3dEstate');
            if (anchor) {
                anchor.classList.add(
                    'btn',
                    'btn-primary',
                    'btn-with-icon',
                    'd-inline-flex',
                    'align-items-center',
                    'gap-1',
                    'justify-content-center',
                    'px-3',
                    'min-w-max-content',
                    'flex-fill'
                );
                anchor.innerHTML = 'Wirtualny Spacer <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" /></svg>';
            }
        });
    </script>
    <div id="root3dEstate"></div>
    <script>
        (function(w, d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], a = {renderDom: function(){}};
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.async=!!0;
            js.src = 'https://implementations.3destate.pl/sdk.js';
            fjs.parentNode.insertBefore(js, fjs);
            w.API_IMPLEMENTATION_3D_ESTATE = a;
            w.websiteCode = "kalter--agencja-regal-estate-";
        }(window, document, 'script', 'jssdk-implementation-3destate'));

        window.API_IMPLEMENTATION_3D_ESTATE.renderDom();
    </script>
    <script src="https://implementations.3destate.pl/model360.js"></script>
@endpush