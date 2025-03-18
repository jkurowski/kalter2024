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

        @include('front.investments.single-investment-search', ['investment' => $investment])

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        @include('front.investments.submenu', ['menuIds' => $investment->menu])
                    </div>
                </div>
            </div>
        </section>

        <div data-bs-spy="scroll" data-bs-target="#navbar-secondary" class="position-relative with-bigger-section-spacing">

            <section id='opis-inwestycji' class="s1 pt-40">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6">
                            <div style="--translate-x: -19%;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Nowe mieszkania
                                    </span>
                                    <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                        W ursusie
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    „Na Skraju”, to nasza najnowsza inwestycja usytuowana w dynamicznie rozwijającej
                                    się dzielnicy Ursus przy ul. Henryka Brodatego 51. Zaprojektowaliśmy niski, czterokondygnacyjny, kameralny budynek z wewnętrznym patio otwartym na południe.
                                </p>
                                <p>
                                    W budynku znajdują się dwie klatki schodowe z windami i raptem 72 mieszkania o powierzchni od 35 do 100 m2. W celu zapewnienia maksymalnego komfortu użytkowania zaplanowano optymalne układy pomieszczeń z oknami dającymi dużo naturalnego światła. Wszystkie nowe mieszkania posiadają powierzchnię dodatkową w postaci przestronnych ogródków, balkonów lub tarasów.
                                </p>
                                <p>
                                    Projekt zakłada zastosowanie ekologicznych i energooszczędnych rozwiązań zmniejszających koszty utrzymania budynku i mieszkań, takich jak: panele fotowoltaiczne na dachu, zbiorniki retencyjne na wodę szarą i wodę do podlewania zieleni wspólnej, wentylacje części wspólnych z rekuperacją, energooszczędne oświetlenie LED części wspólnych oraz stanowiska do ładowania samochodów elektrycznych na parkingu naziemnym
                                </p>
                                <p>
                                    Planowany termin oddania inwestycji to II kw. 2025r.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset("/img/opis_inwestycji_hero.webp") }}" alt="" width="555" height="629" loading="eager">
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
                                <img class="img-fluid rounded" src="{{ asset("/img/opis_inwestycji_s2.webp") }}" alt="" width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Mieszkaj<br> wygodnie
                                    </span>
        
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Osiedle „Na Skraju” doskonale spełniające oczekiwania obecnych i przyszłych pokoleń, to niezwykłe miejsce, które posiada wiele zalet. Zaprojektowaliśmy różnorodne typy mieszkań, dostosowane do potrzeb różnych pokoleń i stylów życia. Znajdą tu swoje miejsce do życia single, rodziny z dziećmi, a także seniorzy. To sprawia, że osiedle jest atrakcyjne dla różnych grup społecznych.
                                </p>
                                <p>
                                    Każde nowe mieszkanie, zostanie wyposażone w standardzie w domofon (z opcją wymiany na wideofon), sygnał antenowy telewizji naziemnej i satelitarnej oraz uzyska możliwość zainstalowania telewizji kablowej.
                                </p><p>
                                    Na osiedlu przewidujemy kontrolę dostępu i monitoring. Budynek będzie posiadał przestronne cichobieżne windy.
                                </p>
        
                            </div>
                        </div>
        
                    </div>
                </div>
            </section>

            <section class="s3 mb-130-lg">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-lg-4 ">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
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
                                    W ofercie dostępne są różne warianty mieszkań, w tym: z dwiema łazienkami, garderobą lub oknem w kuchni.
                                </p>
                                <p>
                                    Osiedle „Na skraju” posiada także podziemną halę garażową, w której znajduje się 80 miejsc postojowych, zapewniających wygodne parkowanie.
                                </p>
                                <p>
                                    Dodatkowo, na zewnątrz budynku na poziomie parteru, przewidziano kolejne 11 miejsc parkingowych oraz stojaki na rowery.
                                </p>
        
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 position-relative">
                            <div data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset("/img/o_inwestycji_s3.webp") }}" alt="" width="906" height="492" loading="lazy" decoding="async">
                            </div>
                            <div class="position-absolute-lg translate-middle-y-lg top-50 w-calc-lg">
                                <div class="row">
                                    <div class="col-12 col-xl-10 offset-xl-1" data-aos="fade-up">
                                        <div class="bg-white p-3 px-xl-40">
                                            <div class="col-12  col-xxl-6 offset-xxl-3">
                                                <p class="text-center text-pretty mb-20">Położyliśmy nacisk na optymalne wykorzystanie przestrzeni przy zachowaniu:</p>
                                            </div>
        
                                            <div class="row row-gap-3 justify-content-center">
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 87px; height: 87px;">
                                                        <img src="{{ asset("img/circle_plans.svg") }}" width="42" height="42" alt="" loading="lazy" decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Funkcjonalności<br> pomieszczeń</p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 87px; height: 87px;">
                                                        <img src="{{ asset("img/circle_living_room.svg") }}" width="42" height="42" alt="" loading="lazy" decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Różnorodności<br> aranżacyjnych<br> rozwiązań</p>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center" style="width: 87px; height: 87px;">
                                                        <img src="{{ asset("img/circle_area.svg") }}" width="42" height="42" alt="" loading="lazy" decoding="async" class="img-fluid">
                                                    </div>
                                                    <p class="text-secondary text-center mt-3 mt-lg-30">Dużej wygody<br> użytkowania</p>
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



            <section class="s4">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset("/img/o_inwestycji_s4.webp") }}" alt="" width="555" height="432" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Prywatne<br> ogródki i balkony
                                    </span>
        
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    W inwestycji wszystkim nowym mieszkaniom na parterze zapewniono prywatne ogródki o powierzchniach od 12 do 122 m2. Stanowią one idealne miejsce do aranżowania własnej przestrzeni zielonej czy organizowania spotkań w gronie rodzinnym.
                                </p>
                                <p>
                                    Mieszkania na wyższych kondygnacjach zostały wyposażone w przestronne, funkcjonalne balkony, które dodają uroku a jednocześnie oferują równie interesującą przestrzeń do aranżacji i relaksu na świeżym powietrzu.
                                </p>
                                <p>
                                    Te wszystkie opcje pozwalają mieszkańcom wybrać rozwiązanie,które najlepiej odpowiada ich preferencjom i potrzebom, zapewniając jednocześnie dodatkową powierzchnię przynależną.
                                </p>
        
                            </div>
                        </div>
        
                    </div>
                </div>
            </section>

            <section class="s5">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-2">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        energooszczędne <br>
                                        rozwiązania
                                    </span>
        
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Na osiedlu zapewniona jest darmowa energia dla części wspólnych dzięki zastosowaniu paneli fotowoltaicznych na dachu budynku. Wykorzystujemy energię słoneczną do zasilania oświetlenia i innych urządzeń bez ponoszenia dodatkowych kosztów.
                                </p>
                                <p>
                                    Dodatkowo, osiedle korzysta z systemu pozyskiwania i dystrybucji wody deszczowej, umożliwiającego wykorzystanie tej wody w instalacji WC mieszkań i do podlewania zieleni w częściach wspólnych.
                                </p>
                                <p>
                                    Dla użytkowników samochodów elektrycznych dostępne są również miejsca do ładowania pojazdów.
                                </p>
        
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset("/img/o_inwestycji_s5.webp") }}" alt="" width="588" height="630" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s6">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset("/img/o_inwestycji_s6.webp") }}" alt="" width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Dogodna<br> komunikacja
                                    </span>
        
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    „Na Skraju,” zlokalizowane przy ul. Brodatego, w kameralnej części warszawskiego Ursusa, zapewni swoim mieszkańcom doskonałe połączenie z pozostałą częścią miasta, dzięki istniejącej bogatej infrastrukturze i rozwiniętej komunikacji miejskiej.
                                </p>
                                <p>
                                    W pobliżu znajduje się trasa S2, stacja Kolei Mazowieckich - Warszawa Gołąbki, stacja PKP - Warszawa Ursus - Niedźwiadek oraz liczne przystanki autobusowe. Obwodnicą S2 można dotrzeć w ciągu 20 minut na Lotnisko im. Fryderyka Chopina, tyle samo czasu zajmuje dojazd samochodem
                                    do Centrum Warszawy.
                                </p>
        
                            </div>
                        </div>
        
                    </div>
                </div>
            </section>

            <section class="s7">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Cicha i spokojna <br>
                                        okolica
                                    </span>
        
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Najważniejszym atutem lokalizacji osiedla jest sąsiedztwo niskiej zabudowy jednorodzinnej.
                                </p>
                                <p>
                                    Inwestycja zapewnia nie tylko komfortowe nowe mieszkania, ale również oferuje wiele możliwości spędzania czasu wolnego w otoczeniu natury i atrakcyjnych miejsc. To tutaj zlokalizowany jest pierwszy w Warszawie park ekologiczny zaopatrzony w plac zabaw i siłownię plenerową.
                                </p>
                                <p>
                                    Pobliskie 3 parki: Hassów z łąką polnych kwiatów, Czechowski oraz Park Achera będą rajem dla miłośników przyrody.
                                </p>
                                <p>
                                    Odkryj niezwykłe miejsce o nazwie Hasanka, gdzie czeka na Ciebie nie tylko uroczy plac zabaw, ale także ekscytujący skatepark.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset("/img/o_inwestycji_s7.webp") }}" alt="" width="672" height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s8">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                            <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Bogata <br>
                                        infrastruktura
                                    </span>
        
                                </h2>
                            </div>
                            <div class="row  mt-4 mt-md-40">
                                <div class="col-12 col-sm-6">
                                    <div class="text-pretty" data-aos="fade">
                                        <p>
                                            Mieszkańcy w bliskim otoczeniu inwestycji znajdą liczne sklepy, restauracje, kawiarnie, ośrodki medyczne oraz centra handlowe, takie jak Galeria Gawra i Centrum Handlowe Piast.
                                        </p>
                                        <p>
                                            Okolica „Na Skraju” oferuje również bogatą infrastrukturę oświatową z licznymi żłobkami, przedszkolami i szkołą podstawową.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="text-pretty " data-aos="fade">
                                        <p>
                                            W niedalekiej okolicy znajduje się Ośrodek Sportu i Rekreacji z dostępem do pływalni i boisk oraz hali sportowej. Kolejny ciekawy punkt na mapie Ursusa to znany w całej okolicy klub tenisowy - Tenes Club.
                                        </p>
                                        <p>
                                            Dla entuzjastów wodnych szaleństw idealnym miejscem do odwiedzenia będzie popularna Pływalnia Albatros.
                                        </p>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                    <div class="row row-gap-4 mt-4 mt-md-50">
                        <div class="col-6 col-md-3">
                            <div data-aos="fade">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("/img/o_inwestycji_s8_1.webp") }}" alt="" width="672" height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="mt-md-3 mt-lg-30" data-aos="fade">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("/img/o_inwestycji_s8_2.webp") }}" alt="" width="672" height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div data-aos="fade">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("/img/o_inwestycji_s8_3.webp") }}" alt="" width="672" height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="mt-md-3 mt-lg-30" data-aos="fade">
                                <img class="w-100 h-100 object-fit-cover" src="{{ asset("/img/o_inwestycji_s8_4.webp") }}" alt="" width="672" height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="lokalizacja" class="s9">
                <div class="container">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div style="--translate-x: -25%;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Lokalizacja
                                    </span>
                                    <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                        osiedla
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Doskonała lokalizacja gwarantuje idealne połączenie z pozostałą częścią miasta, zapewnia bogatą infrastrukturę oraz otoczenie pełne zieleni, tworząc niezwykłą harmonię pomiędzy dostępem do wszystkich udogodnień miejskich, a bliskością natury.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="ratio ratio-16x9" data-aos="fade">
                                <div id="map" class="leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" src="https://tile.openstreetmap.org/13/4538/2714.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(58px, -37px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4539/2714.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(314px, -37px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4538/2715.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(58px, 219px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4539/2715.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(314px, 219px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4537/2714.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-198px, -37px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4540/2714.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(570px, -37px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4537/2715.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-198px, 219px, 0px); opacity: 1;"><img alt="" src="https://tile.openstreetmap.org/13/4540/2715.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(570px, 219px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-marker-pane"><img src="img/marker.svg" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt="Marker" tabindex="0" role="button" style="margin-left: -28px; margin-top: -94px; width: 55px; height: 88px; transform: translate3d(332px, 186px, 0px); z-index: 186;"></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in" aria-disabled="false"><span aria-hidden="true">+</span></a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out" aria-disabled="false"><span aria-hidden="true">−</span></a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JavaScript library for interactive maps"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" class="leaflet-attribution-flag"><path fill="#4C7BE1" d="M0 0h12v4H0z"></path><path fill="#FFD500" d="M0 4h12v3H0z"></path><path fill="#E0BC00" d="M0 7h12v1H0z"></path></svg> Leaflet</a> <span aria-hidden="true">|</span> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center pt-md-50 mt-30">
                        <div class="col-12">
                            <p class="h5 fw-semibold text-secondary mb-3 mb-md-30">Infrastruktura w otoczeniu inwestycji:</p>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <ul>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            przystanek autobusowy linii 187, 194, N35:
                                        </p>
                                        <p class="text-secondary">
                                            600m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            przystanek autobusowy linii 716, N85:
                                        </p>
                                        <p class="text-secondary">
                                            750m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            przystanek autobusowy linii 501, 517:
                                        </p>
                                        <p class="text-secondary">
                                            950m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            przystanek autobusowy linii 177:
                                        </p>
                                        <p class="text-secondary">
                                            800m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            stacja kolejowa:
                                        </p>
                                        <p class="text-secondary">
                                            1,5km
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            plac zabaw:
                                        </p>
                                        <p class="text-secondary">
                                            350m
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <ul>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            tereny sportowe i rekreacyjne:
                                        </p>
                                        <p class="text-secondary">
                                            900m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            park:
                                        </p>
                                        <p class="text-secondary">
                                            1,3km
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            centrum handlowe:
                                        </p>
                                        <p class="text-secondary">
                                            850m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            żłobek:
                                        </p>
                                        <p class="text-secondary">
                                            400m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            przedszkole publiczne
                                        </p>
                                        <p class="text-secondary">
                                            800m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            przychodnia:
                                        </p>
                                        <p class="text-secondary">
                                            1,2km
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <ul>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            Szkoła podstawowa:
                                        </p>
                                        <p class="text-secondary">
                                            650m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            market spożywczy:
                                        </p>
                                        <p class="text-secondary">
                                            950m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            sklep osiedlowy:
                                        </p>
                                        <p class="text-secondary">
                                            500m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            bazar:
                                        </p>
                                        <p class="text-secondary">
                                            1,3km
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            kościół:
                                        </p>
                                        <p class="text-secondary">
                                            900m
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex justify-content-between gap-3 w-100">
                                        <p>
                                            apteka:
                                        </p>
                                        <p class="text-secondary">
                                            950m
                                        </p>
                                    </div>
                                </li>
                            </ul>
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
            @include('front.investments.gallery', [
                'only_slider' => true,
                'images' => [
      
                ],
            ])

            <div id="kontakt">
                @include('layouts.partials.cta', ['pageTitle' => 'Strona inwestycji', 'investmentName' => $investment->name, 'investmentId' => $investment->id, 'back' => true, 'investmentText' => $investment->contact_content])
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
            }).addTo(leafletMap);

            L.marker([52.197750, 20.856528], {
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
                        const googleMapsUrl = `https://www.google.com/maps?q=52.197750,20.856528`;
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
