@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name.' - '.$investment->floor->name)
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
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->name }}</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->floor->name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                        @isset($investment->name)
                            <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">{{ $investment->name }}</h1>
                        @endisset
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">{{ $investment->floor->name }}</p>
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

        <section class="py-40">
            <div class="container">
                <div class="row row-gap-3 justify-content-between small">
                    <div class="col-6 col-sm-4">
                        <a href="" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                            <svg class="me-2 me-sm-3 me-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(362.073 -672.938) rotate(180)" fill="currentColor" />
                            </svg>

                            Poprzednie
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 text-center order-first order-sm-0">
                        <a href="" class="btn btn-outline-primary" style="--bs-btn-hover-color: var(--bs-white);">
                            Plan piętra
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 text-end">
                        <a href="" class="btn btn-primary  px-3 min-w-max-content flex-fill d-inline-flex align-items-center  gap-1">
                            Następne
                            <svg class="ms-2 ms-sm-3 ms-md-4" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row row-gap-30">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="text-secondary">
                            <h2 class="mb-0">Mieszkanie 1</h2>
                            <p class="text-uppercase fw-900 fs-15 ff-secondary mb-0 lh-1">Na Skraju</p>
                            <p class="mb-20"><small>Etap: I</small></p>
                            <p class="text-uppercase fw-bold fs-5 text-success">Dostępny</p>
                            <p class="h4 mb-1 d-flex flex-wrap align-items-center column-gap-3 ff-secondary">
                            <span class="fs-24">
                                611 000 Zł
                            </span>
                                <span class="text-body-emphasis opacity-50 fs-6 align-middle text-decoration-line-through">
                                640 000 Zł
                            </span>
                            </p>
                            <p class="fs-10 text-black mb-0">
                                Najniższa cena z ostatnich 30 dni:....
                            </p>
                            <div class="mb-50 mt-4">
                                <table class="text-sm-down-small w-100">
                                    <tbody>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/tile.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Piętro</td>
                                        <td class="text-end pb-2">Parter</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/blueprint.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Metraż</td>
                                        <td class="text-end pb-2">83,78 m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/rooms.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Liczba Pokoi</td>
                                        <td class="text-end pb-2">4</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/kitchen.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Aneks/Kuchnia</td>
                                        <td class="text-end pb-2">Aneks kuchenny</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/window.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Wystawa okienna</td>
                                        <td class="text-end pb-2">Południe wschód</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/terrace.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Taras</td>
                                        <td class="text-end pb-2">12,89 m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon pb-2"><img src="img/shovels.svg" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                                        <td class="pb-2">Ogródek</td>
                                        <td class="text-end pb-2">59,54 m<sup>2</sup></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="/kontakt.php" class="btn btn-primary btn-with-icon px-3 min-w-max-content flex-fill d-inline-flex align-items-center justify-content-center gap-1">
                                    Zapytaj o ofertę
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                        <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="/kontakt.php" class="btn btn-primary btn-with-icon d-inline-flex align-items-center gap-1 justify-content-center px-3 min-w-max-content flex-fill">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="11.109" height="12.96" viewBox="0 0 11.109 12.96">
                                        <path id="Icon_metro-file-pdf" data-name="Icon metro-file-pdf" d="M13.188,4.952a1.683,1.683,0,0,1,.347.55,1.669,1.669,0,0,1,.145.636V14.47a.691.691,0,0,1-.694.694H3.265a.691.691,0,0,1-.694-.694V2.9A.691.691,0,0,1,3.265,2.2h6.48a1.67,1.67,0,0,1,.636.145,1.683,1.683,0,0,1,.55.347ZM9.977,3.187V5.906H12.7a.79.79,0,0,0-.159-.3L10.273,3.346a.79.79,0,0,0-.3-.159Zm2.777,11.051V6.832H9.745a.691.691,0,0,1-.694-.694V3.129H3.5V14.238h9.257ZM9.036,9.949a5.5,5.5,0,0,0,.608.405,7.177,7.177,0,0,1,.846-.051q1.063,0,1.28.354a.35.35,0,0,1,.014.376.021.021,0,0,1-.007.014l-.014.014v.007q-.043.275-.513.275a2.983,2.983,0,0,1-.832-.145,5.274,5.274,0,0,1-.94-.383,13.023,13.023,0,0,0-2.835.6q-1.107,1.895-1.75,1.895a.421.421,0,0,1-.2-.051l-.174-.087-.043-.036a.3.3,0,0,1-.043-.26,1.571,1.571,0,0,1,.405-.662,3.5,3.5,0,0,1,.955-.7.106.106,0,0,1,.166.043.042.042,0,0,1,.014.029q.376-.615.774-1.425A11.038,11.038,0,0,0,7.5,8.271a5.846,5.846,0,0,1-.221-1.154A2.812,2.812,0,0,1,7.322,6.2q.08-.289.3-.289h.159a.3.3,0,0,1,.253.108.578.578,0,0,1,.065.492.157.157,0,0,1-.029.058.188.188,0,0,1,.007.058v.217a9.471,9.471,0,0,1-.1,1.389A3.659,3.659,0,0,0,9.036,9.949ZM4.871,12.922a3.193,3.193,0,0,0,.991-1.143,4.123,4.123,0,0,0-.633.608A2.4,2.4,0,0,0,4.871,12.922ZM7.749,6.268a2.151,2.151,0,0,0-.014.955q.007-.051.051-.318,0-.022.051-.311a.163.163,0,0,1,.029-.058.021.021,0,0,1-.007-.014.015.015,0,0,0,0-.011.015.015,0,0,1,0-.011.416.416,0,0,0-.094-.26.021.021,0,0,1-.007.014v.014Zm-.9,4.781a10.608,10.608,0,0,1,2.054-.586,1.091,1.091,0,0,1-.094-.069,1.3,1.3,0,0,1-.116-.1,3.831,3.831,0,0,1-.918-1.273,9.665,9.665,0,0,1-.6,1.425q-.217.405-.325.6Zm4.672-.116a1.731,1.731,0,0,0-1.013-.174,2.736,2.736,0,0,0,.9.2.7.7,0,0,0,.13-.007s0-.012-.014-.022Z" transform="translate(-2.571 -2.203)" fill="#fff" />
                                    </svg>

                                    Pobierz kartę
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                        <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="/kontakt.php" class="btn btn-primary btn-with-icon d-inline-flex align-items-center gap-1 justify-content-center px-3 min-w-max-content flex-fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.293" height="22.138" viewBox="0 0 21.293 22.138">
                                        <g id="Layer_2" data-name="Layer 2" transform="translate(-2.4 -2.4)">
                                            <path id="Path_237" data-name="Path 237" d="M2.936,8.6a.436.436,0,0,0,.436-.436V4.775a1.406,1.406,0,0,1,1.4-1.4H8.162a.436.436,0,0,0,0-.871H4.775A2.278,2.278,0,0,0,2.5,4.775V8.162A.436.436,0,0,0,2.936,8.6Z" fill="#fff" stroke="#fff" stroke-width="0.2" />
                                            <path id="Path_238" data-name="Path 238" d="M22.322,2.5H18.936a.436.436,0,1,0,0,.871h3.387a1.406,1.406,0,0,1,1.4,1.4V8.162a.436.436,0,1,0,.871,0V4.775A2.278,2.278,0,0,0,22.322,2.5Z" transform="translate(-1.005)" fill="#fff" stroke="#fff" stroke-width="0.2" />
                                            <path id="Path_239" data-name="Path 239" d="M8.162,23.727H4.775a1.406,1.406,0,0,1-1.4-1.4V18.936a.436.436,0,1,0-.871,0v3.387A2.278,2.278,0,0,0,4.775,24.6H8.162a.436.436,0,1,0,0-.871Z" transform="translate(0 -0.16)" fill="#fff" stroke="#fff" stroke-width="0.2" />
                                            <path id="Path_240" data-name="Path 240" d="M24.162,18.5a.436.436,0,0,0-.436.436v3.387a1.406,1.406,0,0,1-1.4,1.4H18.936a.436.436,0,1,0,0,.871h3.387A2.278,2.278,0,0,0,24.6,22.322V18.936A.436.436,0,0,0,24.162,18.5Z" transform="translate(-1.005 -0.16)" fill="#fff" stroke="#fff" stroke-width="0.2" />
                                            <path id="Path_241" data-name="Path 241" d="M20.253,17.632V10.207a.5.5,0,0,0-.237-.429L13.863,6.066a.455.455,0,0,0-.473,0L7.242,9.779a.5.5,0,0,0-.237.429v7.425a.5.5,0,0,0,.237.429l6.153,3.712a.455.455,0,0,0,.473,0l6.153-3.712A.5.5,0,0,0,20.253,17.632ZM13.627,7.066l5.207,3.141-5.207,3.141-5.2-3.141Zm-5.675,4,5.2,3.141v6.282l-5.2-3.141ZM14.1,20.488V14.206l5.207-3.141v6.282Z" transform="translate(-0.581 -0.451)" fill="#fff" stroke="#fff" stroke-width="0.2" />
                                        </g>
                                    </svg>

                                    Wirtualny spacer
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                        <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-md-6 offset-lg-1 order-first order-md-0">
                        <ul class="nav justify-content-center justify-content-md-end mb-4 mb-sm-30 gap-30" role="tablist">
                            <li class="nav-item tab-switcher" role="presentation">
                                <button class="nav-link active tab-switcher-button-shadow" id="btn-3d" data-bs-toggle="tab" data-bs-target="#btn-3d-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="true">
                                    Rzut 3D
                                </button>
                            </li>
                            <li class="nav-item tab-switcher" role="presentation">
                                <button class="nav-link tab-switcher-button-shadow" id="btn-2d" data-bs-toggle="tab" data-bs-target="#btn-2d-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="false">
                                    Plan
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="btn-3d-pane" role="tabpanel" aria-labelledby="btn-3d" tabindex="0">
                                <div class="w-100 h-100">
                                    <a href="/img/plan.jpg" class="glightbox">
                                        <img src="img/plan.jpg" loading="lazy" class="w-100 h-100 object-fit-contain" alt="" width="672" height="476">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="btn-2d-pane" role="tabpanel" aria-labelledby="btn-2d" tabindex="0">
                                <div class="w-100 h-100">
                                    <a href="/img/plan.jpg" class="glightbox">
                                        <img src="img/plan.jpg" loading="lazy" class="w-100 h-100 object-fit-contain" alt="" width="672" height="476">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3 pb-5">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="img/sygnet_secondary.svg" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Opis mieszkania
                            </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                Na skraju
                            </span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="content">
                            <ul>
                                <li>
                                    Pokój w metrażu 9,40 m2 z miejscem na łóżko, szafę, biurko do pracy lub toaletkę z możliwością aranżacji jako pokój dziecięcy lub gabinet.
                                </li>
                                <li>
                                    Dodatkowy pokój w metrażu 8,57 m2 z miejscem na łóżko, szafę, biurko do pracy lub toaletkę z możliwością aranżacji jako pokój dziecięcy lub gabinet.
                                </li>
                                <li>
                                    Przedpokój 12,60 m2 pozwalający na zrobienie pakownych szaf w zabudowie.
                                </li>
                                <li>
                                    Dwie przestronne łazienki 4,81 m2 i 5,15 m2, pozwalające na niezapomniane chwile dla siebie, w których bez problemu zmieści się wanna, prysznic, toaleta, pralka, suszarka oraz duża umywalka.
                                </li>
                                <li>
                                    Za oknem widok na niską zabudowę jednorodzinną oraz strefę zieloną, a także parterowy budynek gospodarczy.
                                </li>
                                <li>
                                    Mieszkanie czteropokojowe 85,74 m2 składające się z przedpokoju, pokoju dziennego z aneksem, sypialni, dwóch dodatkowych pokoi i dwóch łazienek, z wystawą okienną wschód-południe dostępne na parterze lub 1 piętrze.
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="content">
                            <ul>
                                <li>
                                    Loggia o powierzchni 5,82 m2, wychodząca z pokoju dziennego idealna na pysznąkawę o poranku.
                                </li>
                                <li>
                                    Na parterze domownicy mogą korzystać z własnych dwóch ogródków o łącznej powierzchni 60 m2 wraz z tarasami o łącznej powierzchni 13 m2.
                                </li>
                                <li>
                                    Podwójne panoramiczne okna (160x225 cm) oraz (160x240 cm) dają idealne nasłonecznienie mieszkania i doświetlają na piętrze salon z aneksem kuchennym
                                    o powierzchni 31 m2, zaś na parterze dają dodatkowe wyjście (160x240 cm)
                                    oraz (160x240 cm) do ogródka.
                                </li>
                                <li>
                                    Komfortowa powierzchnia sypialniana o metrażu 13,87 m2, z dużym oknem
                                    o wymiarach 100x225 cm na piętrze lub wyjściem (100x240) na taras i do ogródka
                                    na parterze. Sypialni zmieści się podwójne łóżko, szafki nocne oraz szafa w zabudowie, biurko do pracy lub toaletka.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                        <div class="ratio ratio-16x9">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube-nocookie.com/embed/NpEaa2P7qZI?si=GFfNXp2Rc_fHYDMA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="img/sygnet_secondary.svg" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
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
                        <div class="pt-4 mt-3 text-center" data-aos="fade">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor

                            </p>

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
                <div>
                    <?php require __DIR__ . '/layout/components/slider-invest-card-horizontal.php'; ?>
                </div>
                <div>
                    <?php require __DIR__ . '/layout/components/slider-invest-card-horizontal.php'; ?>

                </div>
                <div>
                    <?php require __DIR__ . '/layout/components/slider-invest-card-horizontal.php'; ?>

                </div>
                <div>
                    <?php require __DIR__ . '/layout/components/slider-invest-card-horizontal.php'; ?>

                </div>
                <div>
                    <?php require __DIR__ . '/layout/components/slider-invest-card-horizontal.php'; ?>
                </div>
            </div>
        </section>



        <section class="position-relative cta">
            <img src="img/cta_bg.webp" alt="Tło call to action" width="1920" height="1080" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" loading="lazy" decoding="async">
            <div class="container z-2">
                <div class="row">
                    <div class="col-12 text-white mb-5 pb-4">

                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center ">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="img/sygnet.svg" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade" class="aos-init aos-animate">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                                Zapytaj
                            </span>
                                <span class="fw-900 fs-4 d-block text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                o lokal
                            </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                        <div class="contact-form-container text-secondary">
                            <div class="position-absolute cta-person z-2">
                                <img class="img-fluid" src="img/cta_person.webp" alt="" width="475" height="710" loading="lazy" decoding="async">
                            </div>
                            <p class="fs-5 text-uppercase fw-semibold text-secondary">FORMULARZ KONTAKTOWY</p>

                            <form id="contact-form" autocomplete="off" class="contact-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="form-errors" class="alert-danger alert hide-empty"></div>
                                        <div id="form-success" class="alert-success alert hide-empty"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="user-name" placeholder="Imię i nazwisko" name="username">
                                            <label for="user-name">Imię i nazwisko</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control" id="user-email" placeholder="E-mail" name="email" required="">
                                            <label for="user-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-floating mb-2">
                                            <input type="tel" class="form-control" id="user-tel" placeholder="Telefon" name="tel">
                                            <label for="user-tel">Telefon</label>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Wiadomość" id="user-message" style="height: 100px" name="message"></textarea>
                                            <label for="user-message">Wiadomość</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">

                                    <div class="form-check text-start pt-2 pb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="terms-check2" name="terms2">
                                        <label class="form-check-label fs-10 fs-8 fs-md-10" for="terms-check2">
                                            Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z ustawą o ochronie
                                            danych osobowych w związku z wysłaniem zapytania przez formularz kontaktowy.
                                            Podanie danych jest dobrowolne, ale niezbędne do przetworzenia zapytania.
                                            Administratorem danych jest KALTER NIERUCHOMOŚCI SP. z o.o. 15-218 Białystok,
                                            ul. Augustowska 8.
                                        </label>
                                    </div>
                                    <div class="form-check text-start">
                                        <input class="form-check-input" type="checkbox" value="" id="terms-check" name="terms">
                                        <label class="form-check-label fs-10 fs-8 fs-md-10" for="terms-check">
                                            Oświadczam, iż zapoznałem się z treścią <a class="link-hover-primary text-decoration-underline" href='/polityka-prywatnosci.php'>Polityką prywatności *</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center text-md-start pt-md-3">
                                    <button data-btn-submit="" type="submit" class="btn btn-primary btn-with-icon " disabled="">
                                        Wyślij
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                        </svg>

                                    </button>
                                </div>
                            </form>
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



<div id="property">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-5">
                <div class="property-desc">
                    <div class="room-status room-status-{{$property->status}}">
                        {{ roomStatus($property->status )}}
                    </div>

                    @if($property->price && $property->status == 1)
                        <h6 class="propertyPrice">@money($property->price)</h6>
                    @endif

                    <ul class="list-unstyled">
                        <li>Pokoje:<span>{{$property->rooms}}</span></li>
                        <li>Powierzchnia:<span>{{$property->area}} m<sup>2</sup></span></li>
                        @if($property->garden_area)<li>Ogródek:<span>{{$property->garden_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area)<li>Balkon:<span>{{$property->balcony_area}} m<sup>2</sup></span></li>@endif
                        @if($property->balcony_area_2)<li>Balkon 2:<span>{{$property->balcony_area_2}} m<sup>2</sup></span></li>@endif
                        @if($property->terrace_area)<li>Taras:<span>{{$property->terrace_area}} m<sup>2</sup></span></li>@endif
                        @if($property->loggia_area)<li>Loggia:<span>{{$property->loggia_area}} m<sup>2</sup></span></li>@endif
                        @if($property->parking_space)<li>Miejsce postojowe:<span>{{$property->parking_space}}</span></li>@endif
                        @if($property->garage)<li>Garaż:<span>{{$property->garage}}</span></li>@endif
                    </ul>
                </div>

                <div class="property-img">
                    @if($property->file)
                        <a href="{{ asset('/investment/property/'.$property->file) }}" class="swipebox">
                            <picture>
                                <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}">
                            </picture>
                        </a>
                    @endif
                </div>

                <div class="property-desc d-flex justify-content-center">
                @if($property->file_pdf)
                    <a href="{{ asset('/investment/property/pdf/'.$property->file_pdf) }}" target="_blank" class="bttn">POBIERZ PLAN .PDF</a>
                @endif
                </div>
            </div>
            <div class="col-12 col-xl-7 ps-3 ps-xl-5">
                <div id="property-form">
                    <div class="container">
                        <div class="row d-flex">
                            <div class="col-12">
                                <form method="post" id="contact-form" action="{{route('front.contact.property', $property->id)}}" class="validateForm">
                                    {{ csrf_field() }}
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2>Zapytaj o {{$property->name}}</h2>
                                        </div>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-success border-0">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning border-0">
                                            {{ session('warning') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 form-input">
                                            <label for="form_name">Imię <span class="text-danger">*</span></label>
                                            <input name="name" id="form_name" class="validate[required] form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-sm-6 form-input">
                                            <label for="form_email">E-mail <span class="text-danger">*</span></label>
                                            <input name="email" id="form_email" class="validate[required] form-control @error('email') is-invalid @enderror" type="text" value="{{ old('email') }}">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-sm-6 form-input">
                                            <label for="form_phone">Telefon <span class="text-danger">*</span></label>
                                            <input name="phone" id="form_phone" class="validate[required] form-control @error('phone') is-invalid @enderror" type="text" value="{{ old('phone') }}">

                                            @error('phone')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-1 form-input">
                                            <label for="form_message">Treść wiadomości <span class="text-danger">*</span></label>
                                            <textarea rows="5" cols="1" name="message" id="form_message" class="validate[required] form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>

                                            @error('message')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="rodo-obligation mt-4">
                                                <p>Zgodnie z art. 13 ust.1 i ust. 2 Rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych informujemy, że administratorem Pani/Pana danych osobowych jest Madey Development spółka z ograniczoną odpowiedzialnością 2 sp.k., z siedzibą w  93-120 Łódź ul. Przybyszewskiego 199/205. Dane będą przetwarzane w celu założenia i prowadzenia konta klienta na stronie internetowej w tym przede wszystkim świadczenia usług drogą elektroniczną jak również w celu komunikacji.</p>
                                                <p>Osobie, której dane dotyczą, przysługuje prawo dostępu do treści swoich danych oraz ich poprawiania a także prawo sprzeciwu i żądania zaprzestania przetwarzania i usunięcia swoich danych osobowych.. Podanie danych osobowych przez użytkownika jest dobrowolne, jednakże odmowa podania danych osobowych spowoduje  brak możliwości skontaktowania się oraz udzielenia ewentualnej odpowiedzi na treść zamieszczoną w formularzu kontaktowym (w tym celu możesz wysłać takie oświadczenie na adres email biuro@madej-bud.pl lub pisemnie na adres siedziby. (<a href="https://www.madeydevelopment.pl/files/upload/polityka_prywatnosci.pdf" target="_blank">Polityka informacyjna</a>):</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-form-submit">
                                        <div class="col-12 pt-3">
                                            <div class="input text-center">
                                                <input name="page" type="hidden" value="{{$property->name}}">
                                                <script type="text/javascript">
                                                    document.write("<button class=\"bttn\" type=\"submit\">WYŚLIJ WIADOMOŚĆ</button>");
                                                </script>
                                                <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b><p></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush
