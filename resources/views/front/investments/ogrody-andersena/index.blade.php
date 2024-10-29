@extends('layouts.page', ['body_class' => 'single-offer'])

@section('content')
    <main>
        <section class="position-relative page-hero-section">
            <div class="position-absolute top-0 start-0 w-100 h-100">
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
                        <nav aria-label="breadcrumb small text-white" data-aos="fade">
                            <ol class="breadcrumb opacity-50">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}"
                                        style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Strona
                                        główna</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#"
                                        style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Oferta</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#"
                                        style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div
                        class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 col-xxl-4 offset-xxl-4 text-white text-center">
                        <h1 class="h2 mb-3" data-aos="fade-up">{{ $investment->name }}</h1>
                    </div>
                </div>
            </div>
        </section>

        @include('front.investments.single-investment-search')

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        @include('front.investments.submenu', [
                            'links' => [
                                [
                                    'title' => 'Opis inwestycji',
                                    'href' => route('developro.show', $investment->slug).'#opis-inwestycji',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Wyszukaj z rzutu',
                                    'href' => '#mieszkania',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Wyszukaj z modelu 3D',
                                    'href' => '#model-3d',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Atuty',
                                    'href' => route('developro.show', $investment->slug).'#atuty',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Lokalizacja',
                                    'href' => route('developro.show', $investment->slug).'#lokalizacja',
                                    'active' => false,
                                ],
                                // Conditional link
                                $investment->articles->count() > 0 ? [
                                    'title' => 'Dziennik inwestycji',
                                    'href' => route('developro.investment.news', $investment->slug),
                                    'active' => false,
                                ] : null,
                                [
                                    'title' => 'Kontakt',
                                    'href' => route('developro.show', $investment->slug).'#kontakt',
                                    'active' => false,
                                ],
                            ],
                        ])
                    </div>
                </div>
            </div>
        </section>

        <div data-bs-spy="scroll" data-bs-target="#navbar-secondary" class="position-relative with-bigger-section-spacing">

            <section class="s1 mt-5" id="opis-inwestycji">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s1.png') }}"
                                    alt="" width="555" height="629" loading="eager">
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
                                        Nowe mieszkania<br>w Ząbkach
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    „OGRODY ANDERSENA”, to nasza najnowsza inwestycja usytuowana w dynamicznie rozwijających
                                    się podwarszawskich ZĄBKACH przy ul. Andersena 13 oraz ul. Jagiellońskiej 18,
                                    Jagiellońskiej 18A, Jagiellońskiej 18B. Na terenie powstaną 4 niskie,
                                    pięciokondygnacyjne, kameralne budynki z windami, ze wspólną podziemną halą garażową
                                    oraz z wewnętrznym terenem zielonym oferującym strefy relaksu dla mieszkańców. W
                                    projekcie zaplanowano 123 mieszkania o powierzchni od 31 do 120 m2.
                                </p>
                                <p class='fw-semibold'>
                                    Planowany termin oddania inwestycji to III kw. 2026 rok.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section class="s2">

                <div class="container">
                    <div class="row">
                        <div class="col-12 py-5">
                            <div class="row row-gap-3 justify-content-center">
                                <div class="col-6 col-sm-4">
                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 87px; height: 87px;">
                                        <img src="{{ asset('img/ogrody-andersena/ico_mieszkania.png') }}" width="42"
                                            height="42" alt="" loading="lazy" decoding="async" class="img-fluid">
                                    </div>
                                    <p class="text-secondary text-center mt-3 mt-lg-30">Funkcjonalne mieszkania</p>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 87px; height: 87px;">
                                        <img src="{{ asset('img/ogrody-andersena/ico_okna.png') }}" width="42"
                                            height="42" alt="" loading="lazy" decoding="async" class="img-fluid">
                                    </div>
                                    <p class="text-secondary text-center mt-3 mt-lg-30">Duże okna</p>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 87px; height: 87px;">
                                        <img src="{{ asset('img/ogrody-andersena/ico_windy.png') }}" width="42"
                                            height="42" alt="" loading="lazy" decoding="async"
                                            class="img-fluid">
                                    </div>
                                    <p class="text-secondary text-center mt-3 mt-lg-30">Cichobieżne windy</p>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 87px; height: 87px;">
                                        <img src="{{ asset('img/ogrody-andersena/ico_garaz.png') }}" width="42"
                                            height="42" alt="" loading="lazy" decoding="async"
                                            class="img-fluid">
                                    </div>
                                    <p class="text-secondary text-center mt-3 mt-lg-30">Miejsca garażowe do kazdego
                                        mieszkania, również rodzinne</p>
                                </div>
                                <div class="col-6 col-sm-4">
                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 87px; height: 87px;">
                                        <img src="{{ asset('img/ogrody-andersena/ico_wysokosc.png') }}" width="42"
                                            height="42" alt="" loading="lazy" decoding="async"
                                            class="img-fluid">
                                    </div>
                                    <p class="text-secondary text-center mt-3 mt-lg-30">280cm wysokość pomieszczeń</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        Mieszkaj wygodnie
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Osiedle „OGRODY ANDERSENA” doskonale spełniające oczekiwania obecnych i przyszłych
                                    pokoleń,
                                    to niezwykłe miejsce, które posiada wiele zalet. Zaprojektowaliśmy różnorodne typy
                                    mieszkań,
                                    dostosowane do potrzeb różnych pokoleń i stylów życia. Znajdą tu swoje miejsce do życia
                                    single, rodziny z dziećmi, a także seniorzy.
                                </p>
                                <p>
                                    To idealne miejsce do zamieszkania dla osób ceniących sobie komfort, bezpieczeństwo oraz
                                    wysoką jakość życia w otoczeniu natury. To projekt, który łączy w sobie nowoczesność z
                                    przyjaznym, kameralnym charakterem, tworząc idealne warunki do życia dla każdego
                                    pokolenia.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s2.png') }}"
                                    alt="" width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s3">
                <div class="container">
                    <div class="row row-gap-4">
                                                <div class="col-12 col-lg-8 position-relative">
                            <div data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s3.png') }}"
                                    alt="" width="906" height="492" loading="lazy" decoding="async">
                            </div>
                            <div class="position-absolute-lg translate-middle-y-lg top-50 w-calc-lg">
                                <div class="row">
                                    <div class="col-12 col-xl-10 offset-xl-1" data-aos="fade-up">
                                        <div class="bg-white p-3 px-xl-40">

                                            <div class="row row-gap-3 justify-content-center">
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_strefy.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Strefy rekreacyjne
                                                        dla mieszkańców</p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_plac_zabaw.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Plac zabaw dla
                                                        dzieci</p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_rowerownia.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Rowerownia</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 order-first order-lg-0">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Wykorzystanie<br>
                                        przestrzeni
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    W ofercie dostępne są różne warianty mieszkań, w tym: z dwiema łazienkami, garderobą lub
                                    oknem w kuchni.
                                </p>
                                <p>
                                    Osiedle „Na skraju” posiada także podziemną halę garażową, w której znajduje się 80
                                    miejsc postojowych, zapewniających wygodne parkowanie.
                                </p>
                                <p>
                                    Dodatkowo, na zewnątrz budynku na poziomie parteru, przewidziano kolejne 11 miejsc
                                    parkingowych oraz stojaki na rowery.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s4" id='atuty'>
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-lg-5 ">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Prywatne ogródki<br>i balkony
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    W inwestycji wszystkim nowym mieszkaniom na parterze zapewniono prywatne ogródki o
                                    powierzchniach od 20 do 97 m2. Stanowią one idealne miejsce do aranżowania własnej
                                    przestrzeni zielonej czy organizowania spotkań w gronie rodzinnym.
                                </p>

                                <p>
                                    Mieszkania na wyższych kondygnacjach zostały wyposażone w przestronne, funkcjonalne
                                    balkony
                                    i tarasy, które dodają uroku a jednocześnie oferują równie interesującą przestrzeń do
                                    aranżacji i relaksu na świeżym powietrzu.

                                </p>
                                <p>
                                    Te wszystkie opcje pozwalają mieszkańcom wybrać rozwiązanie, które najlepiej odpowiada
                                    ich
                                    preferencjom i potrzebom.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 position-relative">
                            <div data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s4.png') }}"
                                    alt="" width="906" height="492" loading="lazy" decoding="async">
                            </div>
                            <div class="position-absolute-lg translate-middle-y-lg top-50 w-calc-lg">
                                <div class="row">
                                    <div class="col-12 col-xl-10 offset-xl-1" data-aos="fade-up">
                                        <div class="bg-white p-3 px-xl-40">

                                            <div class="row row-gap-3 justify-content-center">
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_ogrodki.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Prywatne ogródki
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_balkony.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Tarasy i balkony
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_disabled.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Udogodnienia dla
                                                        niepełnosprawnych</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s5">
                <div class="container">
                    <div class="row row-gap-4">
                        
                        <div class="col-12 col-lg-7 position-relative">
                            <div data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s5.png') }}"
                                    alt="" width="906" height="492" loading="lazy" decoding="async">
                            </div>
                            <div class="position-absolute-lg translate-middle-y-lg top-50 w-calc-lg">
                                <div class="row">
                                    <div class="col-12 col-xl-10 offset-xl-1" data-aos="fade-up">
                                        <div class="bg-white p-3 px-xl-40">
                                            <div class="row row-gap-3 justify-content-center">
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_centrum.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">20 min. samochodem
                                                        do centrum Warszawy
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_przystanki.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Przystanki
                                                        autobusowe
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_skm.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">SKM - tylko 7 min.
                                                        do stacji Warszawa Wileńska</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 order-first order-md-0">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Dogodna komunikacja
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Dzięki istniejącej bogatej infrastrukturze drogowej i rozwiniętej komunikacji miejskiej
                                    miasta Ząbki, osiedle „Ogrody Andersena”, zapewni swoim mieszkańcom doskonałe połączenie
                                    z
                                    pozostałą częścią miasta oraz z Warszawą.
                                </p>

                                <p>
                                    Dojazd samochodem do centrum Warszawy zajmuje zaledwie około 20 minut, a do Dworca
                                    Warszawa
                                    Wileńska można dotrzeć już w 15 minut. Komunikacja miejska na terenie Ząbek jest na
                                    wysokim
                                    poziomie, co umożliwia szybkie dotarcie do stacji Metra Trocka lub Kondratowicza za
                                    pomocą
                                    licznych linii autobusowych. Dodatkowym atutem miasta Ząbki jest bezpłatna część
                                    połączeń
                                    komunikacyjnych dla mieszkańców.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s6 mt-lg-5">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-lg-5 ">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Cicha i spokojna okolica
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Najważniejszym atutem lokalizacji osiedla jest jego położenie w sąsiedztwie niskiej
                                    zabudowy
                                    jednorodzinnej. Inwestycja oferuje nie tylko komfortowe, nowe mieszkania, ale również
                                    szerokie możliwości spędzania wolnego czasu w otoczeniu przyrody i atrakcyjnych miejsc
                                    rekreacyjnych. Na terenie osiedla znajdują się trzy strefy dedykowane mieszkańcom: plac
                                    zabaw dla dzieci, strefa rekreacyjna oraz miejsce do wypoczynku.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 position-relative">
                            <div data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s6.png') }}"
                                    alt="" width="906" height="492" loading="lazy" decoding="async">
                            </div>
                            <div class="position-absolute-lg translate-middle-y-20-lg top-50 w-calc-lg">
                                <div class="row">
                                    <div class="col-12 col-xl-10 offset-xl-1" data-aos="fade-up">
                                        <div class="bg-white p-3 px-xl-40">
                                            <div class="row row-gap-3 justify-content-center">
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_monitoring.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Monitoring
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_zabudowa.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Jednorodzinna
                                                        zabudowa w sąsiedztwie
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_las.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Blisko lasu
                                                        rembertowskiego - ok. 10 min. spacerem</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s7 mt-lg-5">
                <div class="container mt-lg-5">
                    <div class="row row-gap-4">
                        
                        <div class="col-12 col-lg-7 position-relative">
                            <div data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/ogrody-andersena/s7.png') }}"
                                    alt="" width="906" height="492" loading="lazy" decoding="async">
                            </div>
                            <div class="position-absolute-lg translate-middle-y-lg top-50 w-calc-lg">
                                <div class="row">
                                    <div class="col-12 col-xl-10 offset-xl-1" data-aos="fade-up">
                                        <div class="bg-white p-3 px-xl-40">
                                            <div class="row row-gap-3 justify-content-center">
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_sklepy.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Sklepy
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_restauracje.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Restauracje
                                                    </p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 87px; height: 87px;">
                                                        <img src="{{ asset('img/ogrody-andersena/ico_szkoly.png') }}"
                                                            width="42" height="42" alt="" loading="lazy"
                                                            decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Szkoły i
                                                        przedzszkola</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 order-first order-md-0">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Bogata infrastruktura
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Mieszkańcy osiedla mają w bliskim sąsiedztwie liczne sklepy, restauracje, kawiarnie,
                                    ośrodki
                                    medyczne oraz tereny zielone. Okolica „Ogrodów Andersena” charakteryzuje się również
                                    bogatą
                                    infrastrukturą oświatową, w której skład wchodzą liczne żłobki, przedszkola oraz szkoła
                                    podstawowa.
                                </p>

                                <p>
                                    Dzięki połączeniu nowoczesnej infrastruktury, dogodnych warunków komunikacyjnych oraz
                                    licznych udogodnień, Ząbki stają się idealnym miejscem do zamieszkania dla osób
                                    ceniących
                                    sobie komfort życia codziennego, bliskość natury oraz łatwy dostęp do wielkomiejskich
                                    atrakcji Warszawy. Wszystkie te elementy sprawiają, że mieszkanie w Ząbkach to
                                    komfortowy
                                    wybór dla osób ceniących sobie zarówno bliskość dużego miasta, jak i spokojną, przyjazną
                                    okolicę pełną udogodnień.
                                </p>
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
                                    Dla rodzin z dziećmi szczególnie istotne będzie bliskie położenie licznych parków i
                                    placów zabaw, które sprzyjają spędzaniu czasu na świeżym powietrzu. Również miłośnicy
                                    sportu znajdą tu coś dla siebie, ponieważ w okolicy znajdują się liczne ścieżki rowerowe
                                    oraz trasy do biegania.

                                    Dzięki połączeniu nowoczesnej infrastruktury, dogodnych warunków komunikacyjnych oraz
                                    licznych udogodnień, Ząbki stają się idealnym miejscem do zamieszkania dla osób
                                    ceniących sobie komfort życia codziennego, bliskość natury oraz łatwy dostęp do
                                    wielkomiejskich atrakcji Warszawy. Wszystkie te elementy sprawiają, że mieszkanie w
                                    Ząbkach to komfortowy wybór dla osób ceniących sobie zarówno bliskość dużego miasta, jak
                                    i spokojną, przyjazną okolicę pełną udogodnień.
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
                                'name' => 'Basen, kręgielnia, squash',
                                'distance' => '1,3 km - 18 min',
                            ],
                            [
                                'name' => 'Boisko sportowe',
                                'distance' => '1,6 km - 23 min',
                            ],
                            [
                                'name' => 'Korty tenisowe',
                                'distance' => '1,6 km - 22 min',
                            ],
                            [
                                'name' => 'Park miejski',
                                'distance' => '2,3 km - 32 min',
                            ],
                            [
                                'name' => 'Plac zabaw',
                                'distance' => '600 m - 8 min',
                            ],
                            [
                                'name' => 'Centrum handlowe',
                                'distance' => '1,2 km - 18 min',
                            ],
                            [
                                'name' => 'Market spożywczy',
                                'distance' => '60 m - 1 min',
                            ],
                        ];
                        
                        $list2 = [
                            [
                                'name' => 'Biedronka',
                                'distance' => '1,1 km – 16 min',
                            ],
                            [
                                'name' => 'Lidl',
                                'distance' => '1,6 km - 22 min',
                            ],
                            [
                                'name' => 'Poczta',
                                'distance' => '600 m - 8 min',
                            ],
                            [
                                'name' => 'Bazar',
                                'distance' => '400 m - 5 min',
                            ],
                            [
                                'name' => 'Apteka',
                                'distance' => '450 m - 6 min',
                            ],
                            [
                                'name' => 'Przystanek autobusowy linia 245',
                                'distance' => '300 m - 4 min',
                            ],
                        
                            [
                                'name' => 'Stacja kolejowa',
                                'distance' => '2,2 km - 31 min',
                            ],
                        ];
                        
                        $list3 = [
                            [
                                'name' => 'Żłobek',
                                'distance' => '50 m - 1 min',
                            ],
                            [
                                'name' => 'Przedszkole publiczne',
                                'distance' => '400 m - 5 min',
                            ],
                            [
                                'name' => 'Szkoła podstawowa',
                                'distance' => '700 m - 10 min',
                            ],
                            [
                                'name' => 'Kościół',
                                'distance' => '550 m - 8 min',
                            ],
                            [
                                'name' => 'Centrum medyczne',
                                'distance' => '50 m - 1 min',
                            ],
                            [
                                'name' => 'Miejska przychodnia',
                                'distance' => '2,1 km - 29 min',
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
                        'url' => asset('img/ogrody-andersena/img_slider_1.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/ogrody-andersena/img_slider_2.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/ogrody-andersena/img_slider_3.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/ogrody-andersena/img_slider_4.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/ogrody-andersena/img_slider_5.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/ogrody-andersena/img_slider_6.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/ogrody-andersena/img_slider_7.jpg'),
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
                center: [52.282791795930834, 21.129569915341722],
                zoom: 13,
            });

            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(leafletMap);

            L.marker([52.282791795930834, 21.129569915341722], {
                icon: L.icon({
                    iconUrl: '{{ asset("img/marker.svg") }}',
                    iconSize: [55, 88],
                    iconAnchor: [28, 94],
                    popupAnchor: [0, -88],
                })
            }).addTo(leafletMap).bindPopup(
                '<p class="fw-bold text-white">Inwestycja „{{ $investment->name }}”</p>'
            );

            const customButton = L.Control.extend({
                onAdd: function(map) {
                    const button = L.DomUtil.create('button', 'leaflet-button');
                    button.innerText = 'Otwórz w Google Maps';
                    button.style.padding = '5px 10px';
                    button.style.cursor = 'pointer';

                    button.onclick = function() {
                        const googleMapsUrl = `https://www.google.com/maps?q=52.282791795930834, 21.129569915341722`;
                        window.open(googleMapsUrl, '_blank');
                    };

                    return button;
                },
                onRemove: function(map) {
                    // Cleanup if needed
                }
            });

            leafletMap.addControl(new customButton({ position: 'bottomleft' }));
        });
    </script>
@endpush
