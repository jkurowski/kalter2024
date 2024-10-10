@extends('layouts.page', ['body_class' => 'single-offer'])

@section('content')
    <main>
        <section class="position-relative page-hero-section">
            <div class="position-absolute top-0 start-0 w-100 h-100 with-image-overlay-gradient ">
                <img src="{{ asset('img/downtown/img_slider_1.jpg') }}" alt="" width="1920" height="386"
                    loading="eager" decoding="async" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="container isolation-isolate">
                <div class="row row-gap-30">
                    <div class="col-12">
                        <nav aria-label="breadcrumb small text-white" data-aos="fade">
                            <ol class="breadcrumb opacity-50">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Strona główna</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Oferta mieszkania</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Downtown</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div
                        class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 col-xxl-4 offset-xxl-4 text-white text-center">
                        <h1 class="h2 mb-3" data-aos="fade-up">Downtown</h1>
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">Zapraszamy do odkrycia nowej,
                            wyjątkowej inwestycji mieszkań na sprzedaż w Łodzi, która odmieni Twoje postrzeganie miasta.
                            Zespół nowoczesnych, komfortowych mieszkań w Łodzi, położonych w samym centrum miasta - to Twoja
                            szansa na eleganckie, praktyczne lokum w znakomitej lokalizacji.</p>
                    </div>
                </div>
            </div>
        </section>

        @include('front.investments.single-investment-search')

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <nav class="fixed-top-menu bg-white" id="navbar-secondary">
                            <ul class="navbar-nav with-underline-active nav-snap-md-down flex-row justify-content-around py-3"
                                style="--bs-nav-link-color: var(--bs-secondary);--bs-nav-link-hover-color: var(--bs-primary); --bs-navbar-active-color: var(--bs-secondary);">
                                <li class="nav-item">
                                    <a class="nav-link" href="#opis-inwestycji">Opis inwestycji</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mieszkania</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Model 3D</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#atuty">Atuty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#lokalizacja">Lokalizacja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Dziennik inwestycji</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kontakt">Kontakt</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div data-bs-spy="scroll" data-bs-target="#navbar-secondary"
            class="position-relative with-bigger-section-spacing">

            <section class="s1" id="opis-inwestycji">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Zyskaj na przedsprzedaży!
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Tylko do 21.10.2024 przyjdź do biura sprzedaży i kup mieszkanie w specjalnej cenie
                                    przedsprzedażowej już od 9.800 zł/m²!
                                </p>
                                <p class="fw-semibold">
                                    DODATKOWO, ZYSKAJ:
                                </p>
                                <ul>
                                    <li>
                                        Miejsce parkingowe GRATIS* lub
                                    </li>
                                    <li>
                                        Harmonogram płatności 30/70**!
                                    </li>
                                </ul>
                                <p>
                                    Promocja ograniczona czasowo i ilościowo (szczegóły w regulaminie).
                                </p>
                                <p class="fw-bold text-secondary"> Nie zwlekaj – najlepsze okazje szybko znikają!</p>
                                <p>
                                    Zadzwoń i umów się na spotkanie już dziś: Tel. <a href='tel:+48532821111'>532 821
                                        111</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s1.jpg" alt="" width="555"
                                    height="629" loading="eager">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s2">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s2.jpg" alt="" width="555"
                                    height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Komfortowe mieszkania
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Oferujemy 187 mieszkań o metrażach od 28 do 150 m2. Różnorodność układów mieszkań, wśród
                                    których dostępne są warianty od 1- do 5-pokojowych, pozwoli Ci znaleźć idealne
                                    rozwiązanie dla Ciebie i Twojej rodziny. Każde mieszkanie zaprojektowane zostało z myślą
                                    o optymalnym wykorzystaniu przestrzeni oraz komforcie codziennego życia. Większość z
                                    nich posiada balkony, loggie lub ogródki z tarasami dając Ci możliwość stworzenia
                                    własnej, zielonej oazy w centrum miasta.
                                </p>

                                <p>
                                    "Down Town" oferuje także 175 miejsc parkingowych zlokalizowanych w podziemnej hali
                                    garażowej, dzięki czemu z nami zaparkujesz bezpiecznie i wygodnie.
                                </p>
                                <div class="mt-4">
                                    <a class="btn btn-primary btn-with-icon text-nowrap"
                                        href="#">Mieszkania 2-POK<svg
                                            xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                            viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                                d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                                transform="translate(-356 684)" fill="currentColor"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s3" >
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Doskonała<br>lokalizacja
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Nasza nowa inwestycja to synteza stylu i wygody w doskonałaej lokalizacji. Mieszkając
                                    tutaj, zyskasz szybki dostęp do najważniejszych punktów miasta - licznych sklepów,
                                    galerii handlowych, takich jak odległa o kilka minut spacerem Galeria Łódzka czy
                                    Manufaktura, do której dojazd zajmie Ci kilkanaście minut, a także licznych restauracji
                                    i biur.
                                </p>
                                <p>
                                    Dodatkowym atutem jest bliskość dworca Fabrycznego i głównych węzłów komunikacyjnych
                                    takich jak stacja przesiadkowa łącząca dwie osie komunikacyjne miasta, wschód-zachód i
                                    północ-południe.
                                </p>
                                <p>
                                    To miejsce, w którym wszystko jest na wyciągnięcie ręki.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s3.jpg" alt="" width="672"
                                    height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s4">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s4.jpg" alt="" width="555"
                                    height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Twoje nowe <br>centrum życia czeka
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    „DownTown” to nowa, ekskluzywna inwestycja, która odmieni Twoje pojmowanie miejskiego
                                    stylu życia. Nowe mieszkania na sprzedaż w centrum Łodzi to komfort, funkcjonalność i
                                    prestiż w jednym miejscu. 187 komfortowych mieszkań o zróżnicowanych metrażach od 28 do
                                    148 m2 pozwoli Ci znaleźć idealne lokum dopasowane do Twoich potrzeb. Większość z nich
                                    posiada loggie, balkony lub prywatne tarasy, dając Ci możliwość stworzenia własnej,
                                    zielonej oazy w sercu miasta.
                                </p>
                                <div class="mt-4">
                                    <a class="btn btn-primary btn-with-icon text-nowrap" href="#contact-form">Skontaktuj
                                        się z nami!<svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                            viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                                d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                                transform="translate(-356 684)" fill="currentColor"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s5">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Bezpieczeństwo<br>i wygoda
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Inwestycja „DownTown” jest w pełni ogrodzona i monitorowana, gwarantując Ci
                                    bezpieczeństwo oraz spokój.
                                </p>
                                <p>
                                    Dodatkowo mieszkania wyposażone zostały w instalacje wideodomofonowe, dzięki czemu
                                    możesz zyskać pełną kontrolę nad tym kto ma dostęp do Twojego mieszkania i czuć się
                                    jeszcze bezpieczniej i wygodniej we własnym domu.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s5.jpg" alt="" width="672"
                                    height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s6" id='atuty'>
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s6.jpg" alt="" width="555"
                                    height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Komfort życia<br> w sercu Łodzi
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Nowoczesny kompleks mieszkaniowy „DownTown” oferuje przemyślaną architekturę i doskonałe
                                    wykorzystanie przestrzeni, zapewniając pełen komfort życia w sercu Łodzi. Starannie
                                    zaplanowana inwestycja obejmuje 187 komfortowych mieszkań o zróżnicowanych metrażach
                                    oraz liczne udogodnienia, które podnoszą standard życia na najwyższy poziom.
                                </p>
                                <div class="mt-4">
                                    <a class="btn btn-primary btn-with-icon text-nowrap" href="#contact-form">Napisz do
                                        nas!<svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                            viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                                d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                                transform="translate(-356 684)" fill="currentColor"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s7">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Zielone przestrzenie<br>i rekreacja
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Ważną częścią kompleksu są starannie zaprojektowane, zielone przestrzenie wspólne.
                                    Liczne tereny rekreacyjne, ścieżki spacerowe oraz eleganckie aranżacje zieleni tworzą
                                    oazę spokoju i odpoczynku w samym sercu tętniącego życiem miasta, idealne do relaksu i
                                    spędzania czasu z rodziną.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s7.jpg" alt="" width="672"
                                    height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s8">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s8.jpg" alt="" width="555"
                                    height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Usługi i handel<br> na wyciągnięcie ręki
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Wewnątrz inwestycji znajdują się również pomieszczenia na cele usługowe i handlowe,
                                    dzięki czemu mieszkańcy mają dostęp do podstawowych sklepów oraz punktów usługowych tuż
                                    na osiedlu, bez konieczności dalekich wyjazdów. Dbałość o każdy detal oraz przemyślane
                                    zagospodarowanie przestrzeni czynią z „DownTown” wyjątkową okazję do zamieszkania w
                                    prestiżowej lokalizacji w Łodzi.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s9">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Wyjątkowa <br>przestrzeń
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Inwestycja „DownTown” wyróżnia się nowoczesną architekturą i zapewnia mieszkańcom
                                    wyjątkową przestrzeń do wypoczynku i integracji. Części wspólne pomiędzy budynkami
                                    zostały starannie zaprojektowane, aby tworzyć harmonijną, zieloną oazę w samym centrum
                                    miasta.
                                </p>
                                <div class="mt-4">
                                    <a class="btn btn-primary btn-with-icon text-nowrap" href="#">Zobacz
                                        mieszkania!<svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                            viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                                d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                                transform="translate(-356 684)" fill="currentColor"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s9.jpg" alt="" width="672"
                                    height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s10">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s10.jpg" alt="" width="555"
                                    height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Zielone <br>serce osiedla
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Teren wokół budynków „DownTown" to nie tylko eleganckie trawniki, ale także łączki
                                    kwietne oraz ścieżki wysypane żwirkiem, stwarzające idealną przestrzeń do spacerów i
                                    relaksu na świeżym powietrzu. Rozmieszczone w tej strefie ławki zachęcają do spędzania
                                    czasu na łonie natury.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s11">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Plac zabaw<br>dla dzieci
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Dla najmłodszych mieszkańców „DownTown" przygotowano specjalnie zaprojektowany,
                                    bezpieczny plac zabaw, wyposażony w różnego rodzaju atrakcje, zapewniające im wesołą i
                                    aktywną zabawę.
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s11.jpg" alt="" width="672"
                                    height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s12">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s12.jpg" alt="" width="555"
                                    height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Aktywna strefa<br>na dachu
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Jednym z największych atutów inwestycji „DownTown" jest ogólnodostępna strefa
                                    rekreacyjna na dachu budynków. Znajdziemy tam nie tylko stylowe pergole z wygodnymi
                                    siedziskami, ale także ogólnodostępną siłownię na świeżym powietrzu. To idealne miejsce
                                    do ćwiczeń, relaksu i podziwiania panoramy miasta.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s11">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Bezpieczna strefa<br>dla rowerów
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Troska o komfort i wygodę mieszkańców przejawia się także w postaci dedykowanych dla
                                    rowerów przestrzeni, znajdujących się zarówno w wewnętrznej jak i zewnętrznej części
                                    budynków „DownTown". To doskonałe miejsca do bezpiecznego przechowywania jednośladów.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="/img/downtown/s13.jpg" alt="" width="672"
                                    height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-localization mt-50" id="lokalizacja">
                <div class="container">
                    <div class="row row-gap-4  align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Lokalizacja
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Inwestycja „DownTown" znajduje się przy ulicy Dowborczyków 24, 24A oraz Targowej 25, 25A
                                    w Łodzi, oferując doskonałą lokalizację w sercu miasta.
                                </p>
                                <p class="fw-semibold text-secondary">
                                    Nie przegap tej wyjątkowej okazji, skontaktuj się z nami już dziś!
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="ratio ratio-16x9" data-aos="fade">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center pt-md-50 mt-30">
                        <div class="col-12">
                            <p class="h5 fw-semibold text-secondary mb-3 mb-md-30">Infrastruktura w otoczeniu inwestycji
                            </p>
                        </div>
                        <?php
                        $list1 = [
                            [
                                'name' => 'Muzeum Sztuki EC1',
                                'distance' => '700 m',
                            ],
                            [
                                'name' => 'Łódzka szkoła filmowa',
                                'distance' => '800 m',
                            ],
                            [
                                'name' => 'Deptak ul. Piotrkowska',
                                'distance' => '900 m',
                            ],
                            [
                                'name' => 'Planetarium',
                                'distance' => '700 m',
                            ],
                            [
                                'name' => 'Park Sienkiewicza',
                                'distance' => '700 m',
                            ],
                            [
                                'name' => 'Park Źródliska',
                                'distance' => '1,2 km',
                            ],
                        ];
                        
                        $list2 = [
                            [
                                'name' => 'Galeria Handlowa Manufaktura',
                                'distance' => '3,8 km',
                            ],
                            [
                                'name' => 'Galeria Łódzka',
                                'distance' => '700 m',
                            ],
                            [
                                'name' => 'Off Piotrkowska',
                                'distance' => '900 m',
                            ],
                        ];
                        
                        $list3 = [
                            [
                                'name' => 'Sieć komunikacji miejskiej',
                                'distance' => '350 m',
                            ],
                            [
                                'name' => 'Dworzec Łódź Fabryczna',
                                'distance' => '900 m',
                            ],
                        ];
                        
                        ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <ul class="mb-0">
                                @foreach ($list1 as $item)
                                    <li>
                                        <div class="d-inline-flex justify-content-between gap-3 w-100">
                                            <p>
                                                {{ $item['name'] }}
                                            </p>
                                            <p class="text-secondary">
                                                {{ $item['distance'] }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <ul class="mb-0">
                                @foreach ($list2 as $item)
                                    <li>
                                        <div class="d-inline-flex justify-content-between gap-3 w-100">
                                            <p>
                                                {{ $item['name'] }}
                                            </p>
                                            <p class="text-secondary">
                                                {{ $item['distance'] }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <ul class="">
                                @foreach ($list3 as $item)
                                    <li>
                                        <div class="d-inline-flex justify-content-between gap-3 w-100">
                                            <p>
                                                {{ $item['name'] }}
                                            </p>
                                            <p class="text-secondary">
                                                {{ $item['distance'] }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
            @include('front.investments.gallery', [
                'images' => [
                    [
                        'url' => asset('img/downtown/img_slider_1.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/downtown/img_slider_2.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/downtown/img_slider_3.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/downtown/img_slider_4.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/downtown/img_slider_5.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/downtown/img_slider_6.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/downtown/img_slider_7.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                ],
            ])

            <div id="kontakt">
                @include('layouts.partials.cta')
            </div>
        </div>
        
    </main>
@endsection
@push('scripts')
    <script defer src="{{ asset('js/leaflet.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" onload="this.media='all'" media="print" />
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
            const leafletMap = L.map("map", {
                center: [51.76283000345753, 19.47064654233024],
                zoom: 13,
            });
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(leafletMap)

            L.marker([51.76283000345753, 19.47064654233024], {
                icon: L.icon({
                    iconUrl: '{{ asset('img/marker.svg') }}',
                    iconSize: [55, 88],
                    iconAnchor: [28, 94],
                    popupAnchor: [0, -88],
                })
            }).addTo(leafletMap).bindPopup('<p class="fw-bold text-white">Inwestycja „DownTown" </p>')
        });
    </script>
@endpush
