@extends('layouts.page', ['body_class' => 'single-offer'])

@section('content')
    <main>
        <section class="position-relative page-hero-section">
            <div class="position-absolute top-0 start-0 w-100 h-100 with-image-overlay-gradient ">
                <img src="{{ asset('img/na-skraju/na_skraju_bg.jpg') }}" alt="" width="1920" height="386"
                    loading="eager" decoding="async" class="w-100 h-100 object-fit-cover">
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
                                        style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Oferta
                                        mieszkania</a>
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
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">
                            „Na Skraju”, to nasza najnowsza
                            inwestycja usytuowana w dynamicznie rozwijającej się
                            dzielnicy Ursus przy ul. Henryka Brodatego 51.</p>
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
                                    'href' => '#opis-inwestycji',
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
                                    'href' => '#atuty',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Lokalizacja',
                                    'href' => '#lokalizacja',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Dziennik inwestycji',
                                    'href' => '#dziennik-inwestycji',
                                    'active' => false,
                                ],
                                [
                                    'title' => 'Kontakt',
                                    'href' => '#kontakt',
                                    'active' => false,
                                ],
                            ],
                        ])
                    </div>
                </div>
            </div>
        </section>

        <div data-bs-spy="scroll" data-bs-target="#navbar-secondary" class="position-relative with-bigger-section-spacing">

            <section class="s0" id="opis-inwestycji">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 ">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Nowe mieszkania<br>w Ursusie
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Zaprojektowaliśmy niski,
                                    czterokondygnacyjny, kameralny budynek z wewnętrznym patio otwartym na południe. W
                                    budynku znajdują się dwie klatki schodowe z windami i raptem <strong>72 mieszkania o
                                        powierzchni
                                        od 35 do 100 m2.</strong> W celu zapewnienia maksymalnego komfortu użytkowania
                                    zaplanowano
                                    optymalne układy pomieszczeń z oknami dającymi dużo naturalnego światła. Wszystkie nowe
                                    mieszkania posiadają powierzchnię dodatkową w postaci przestronnych ogródków, balkonów
                                    lub tarasów.
                                </p>
                                <p>
                                    Projekt zakłada <strong>zastosowanie ekologicznych i energooszczędnych
                                        rozwiązań</strong> zmniejszających
                                    koszty utrzymania budynku i mieszkań, takich jak: panele fotowoltaiczne na dachu,
                                    zbiorniki
                                    retencyjne na wodę szarą i wodę do podlewania zieleni wspólnej, wentylacje części
                                    wspólnych
                                    z rekuperacją, energooszczędne oświetlenie LED części wspólnych oraz stanowiska do
                                    ładowania
                                    samochodów elektrycznych na parkingu naziemnym.
                                </p>
                                <p class="fw-semibold">
                                    Planowany termin oddania inwestycji to II kw. 2025r.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s1">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s1.jpg') }}" alt=""
                                    width="555" height="629" loading="eager">
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
                                        Mieszkaj wygodnie
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Osiedle „Na Skraju” doskonale spełniające oczekiwania obecnych i przyszłych pokoleń, to
                                    niezwykłe miejsce, które posiada wiele zalet. Zaprojektowaliśmy różnorodne typy
                                    mieszkań,
                                    dostosowane do potrzeb różnych pokoleń i stylów życia. Znajdą tu swoje miejsce do życia
                                    single, rodziny z dziećmi, a także seniorzy. To sprawia, że osiedle jest atrakcyjne dla
                                    różnych grup społecznych.

                                </p>
                                <p>
                                    Każde nowe mieszkanie, zostanie wyposażone w standardzie w domofon (z opcją wymiany na
                                    wideofon), sygnał antenowy telewizji naziemnej i satelitarnej oraz uzyska możliwość
                                    zainstalowania telewizji kablowej. Na osiedlu przewidujemy kontrolę dostępu i
                                    monitoring.
                                    Budynek będzie posiadał przestronne cichobieżne windy.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s2">
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
                                        Wykorzystanie przestrzeni
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Położyliśmy nacisk na optymalne wykorzystanie przestrzeni przy zachowaniu:<br>
                                    - funkcjonalności pomieszczeń,<br>
                                    - dużej wygody użytkowania,<br>
                                    - różnorodności rozwiązań aranżacyjnych.
                                </p>
                                <p>
                                    W ofercie dostępne są różne warianty mieszkań, w tym: z dwiema łazienkami, garderobą lub
                                    oknem w kuchni.

                                </p>
                                <p>
                                    Osiedle „Na skraju” posiada także podziemną halę garażową, w której znajduje się 80
                                    miejsc
                                    postojowych, zapewniających wygodne parkowanie. Dodatkowo, na zewnątrz budynku na
                                    poziomie
                                    parteru, przewidziano kolejne 11 miejsc parkingowych oraz stojaki na rowery.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s2.jpg') }}" alt=""
                                    width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s3">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s3.jpg') }}" alt=""
                                    width="672" height="448" loading="lazy" decoding="async">
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
                                        Prywatne ogródki<br>i balkony
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    W inwestycji wszystkim nowym mieszkaniom na parterze zapewniono prywatne ogródki o
                                    powierzchniach od 12 do 122 m2. Stanowią one idealne miejsce do aranżowania własnej
                                    przestrzeni zielonej czy organizowania spotkań w gronie rodzinnym.
                                </p>

                                <p>
                                    Mieszkania na wyższych kondygnacjach zostały wyposażone w przestronne, funkcjonalne
                                    balkony,
                                    które dodają uroku a jednocześnie oferują równie interesującą przestrzeń do aranżacji i
                                    relaksu na świeżym powietrzu.
                                </p>

                                <p>
                                    Te wszystkie opcje pozwalają mieszkańcom wybrać rozwiązanie, które najlepiej odpowiada
                                    ich
                                    preferencjom i potrzebom, zapewniając jednocześnie dodatkową powierzchnię przynależną.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s4">
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
                                        Energooszczędne rozwiązania
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Na osiedlu zapewniona jest darmowa energia dla części wspólnych dzięki zastosowaniu
                                    paneli
                                    fotowoltaicznych na dachu budynku. Wykorzystujemy energię słoneczną do zasilania
                                    oświetlenia
                                    i innych urządzeń bez ponoszenia dodatkowych kosztów.
                                </p>

                                <p>
                                    Dodatkowo, osiedle korzysta z systemu pozyskiwania i dystrybucji wody deszczowej,
                                    umożliwiającego wykorzystanie tej wody w instalacji WC mieszkań i do podlewania zieleni
                                    w
                                    częściach wspólnych. Dla użytkowników samochodów elektrycznych dostępne są również
                                    miejsca
                                    do ładowania pojazdów.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s4.jpg') }}" alt=""
                                    width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s5">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s5.jpg') }}" alt=""
                                    width="672" height="448" loading="lazy" decoding="async">
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
                                        Dogodna komunikacja
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    „Na Skraju,” zlokalizowane przy ul. Brodatego, w kameralnej części warszawskiego Ursusa,
                                    zapewni swoim mieszkańcom doskonałe połączenie z pozostałą częścią miasta, dzięki
                                    istniejącej bogatej infrastrukturze i rozwiniętej komunikacji miejskiej.
                                </p>

                                <p>
                                    W pobliżu znajduje się trasa S2, stacja Kolei Mazowieckich - Warszawa Gołąbki, stacja
                                    PKP -
                                    Warszawa Ursus - Niedźwiadek oraz liczne przystanki autobusowe. Obwodnicą S2 można
                                    dotrzeć w
                                    ciągu 20 minut na Lotnisko im. Fryderyka Chopina, tyle samo czasu zajmuje dojazd
                                    samochodem
                                    do Centrum Warszawy.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s6" id='atuty'>
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
                                        Cicha i spokojna okolica
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Najważniejszym atutem lokalizacji osiedla jest sąsiedztwo niskiej zabudowy
                                    jednorodzinnej .
                                    Inwestycja zapewnia nie tylko komfortowe nowe mieszkania, ale również oferuje wiele
                                    możliwości spędzania czasu wolnego w otoczeniu natury i atrakcyjnych miejsc. To tutaj
                                    zlokalizowany jest pierwszy w Warszawie park ekologiczny zaopatrzony w plac zabaw i
                                    siłownię
                                    plenerową. Pobliskie 3 parki: Hassów z łąką polnych kwiatów, Czechowicki oraz Park
                                    Achera
                                    będą rajem dla miłośników przyrody.

                                </p>
                                <p>
                                    Odkryj niezwykłe miejsce o nazwie Hasanka, gdzie czeka na Ciebie nie tylko uroczy plac
                                    zabaw, ale także ekscytujący skatepark.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s6.jpg') }}" alt=""
                                    width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s7">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/na-skraju/s7.jpg') }}" alt=""
                                    width="672" height="448" loading="lazy" decoding="async">
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
                                        Bogata infrastruktura
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Mieszkańcy w bliskim otoczeniu inwestycji znajdą liczne sklepy, restauracje, kawiarnie,
                                    ośrodki medyczne oraz centra handlowe, takie jak Galeria Gawra i Centrum Handlowe Piast.
                                    Okolica „Na Skraju” oferuje również bogatą infrastrukturę oświatową z licznymi żłobkami,
                                    przedszkolami i szkołą podstawową.
                                </p>

                                <p>
                                    W niedalekiej okolicy znajduje się Ośrodek Sportu i Rekreacji z dostępem do pływalni i
                                    boisk
                                    oraz hali sportowej. Kolejny ciekawy punkt na mapie Ursusa to znany w całej okolicy klub
                                    tenisowy - Tenes Club. Dla entuzjastów wodnych szaleństw idealnym miejscem do
                                    odwiedzenia
                                    będzie popularna Pływalnia Albatros.
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
                                    Doskonała lokalizacja gwarantuje idealne połączenie z pozostałą częścią miasta, zapewnia
                                    bogatą infrastrukturę oraz otoczenie pełne zieleni, tworząc niezwykłą harmonię pomiędzy
                                    dostępem do wszystkich udogodnień miejskich, a bliskością natury.
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
                        <div class="row justify-content-center pt-md-50 mt-30">
                            <div class="col-12">
                                <p class="h5 fw-semibold text-secondary mb-3 mb-md-30">Infrastruktura w otoczeniu
                                    inwestycji
                                </p>
                            </div>
                            <?php
                            $list1 = [
                                [
                                    'name' => 'Przystanek autobusowy linii 187, 194, N35',
                                    'distance' => '600 m',
                                ],
                                [
                                    'name' => 'Przystanek autobusowy linii 716, N85',
                                    'distance' => '750 m',
                                ],
                                [
                                    'name' => 'Przystanek autobusowy linii 501, 517',
                                    'distance' => '950 m',
                                ],
                                [
                                    'name' => 'Przystanek autobusowy linii 177',
                                    'distance' => '800 m',
                                ],
                                [
                                    'name' => 'Stacja kolejowa',
                                    'distance' => '1,5 km',
                                ],
                                [
                                    'name' => 'Tereny sportowe i rekreacyjne',
                                    'distance' => '900 m',
                                ],
                            ];
                            
                            $list2 = [
                                [
                                    'name' => 'Park',
                                    'distance' => '1,3 km',
                                ],
                                [
                                    'name' => 'Centrum handlowe',
                                    'distance' => '850 m',
                                ],
                                [
                                    'name' => 'Żłobek',
                                    'distance' => '400 m',
                                ],
                                [
                                    'name' => 'Przedszkole publiczne',
                                    'distance' => '800 m',
                                ],
                                [
                                    'name' => 'Szkoła podstawowa',
                                    'distance' => '650 m',
                                ],
                                [
                                    'name' => 'Market spożywczy',
                                    'distance' => '950 m',
                                ],
                            ];
                            
                            $list3 = [

                                [
                                    'name' => 'Sklep osiedlowy',
                                    'distance' => '500 m',
                                ],
                                [
                                    'name' => 'Bazar',
                                    'distance' => '1,3 km',
                                ],
                                [
                                    'name' => 'Kościół',
                                    'distance' => '900 m',
                                ],
                                [
                                    'name' => 'Plac zabaw',
                                    'distance' => '350 m',
                                ],
                                [
                                    'name' => 'Przychodnia',
                                    'distance' => '1,2 km',
                                ],
                                [
                                    'name' => 'Apteka',
                                    'distance' => '950 m',
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
                </div>
            </section>


            @include('front.investments.gallery', [
                'images' => [
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_1_1.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_1_2.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_1_3.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_1_4.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_1_5.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_1_6.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                ],
            ])
            @include('front.investments.gallery', [
                'only_slider' => true,
                'images' => [
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_2_1.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_2_2.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_2_3.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/na-skraju/img_slider_bot_2_4.jpg'),
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
                center: [52.197750, 20.856528],
                zoom: 13,
            });
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(leafletMap)

            L.marker([52.197750, 20.856528], {
                icon: L.icon({
                    iconUrl: '{{ asset('img/marker.svg') }}',
                    iconSize: [55, 88],
                    iconAnchor: [28, 94],
                    popupAnchor: [0, -88],
                })
            }).addTo(leafletMap).bindPopup(
                '<p class="fw-bold text-white">Inwestycja „{{ $investment->name }}” </p>')
        });
    </script>
@endpush
