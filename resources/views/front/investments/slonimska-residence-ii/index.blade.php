@extends('layouts.page', ['body_class' => 'single-offer'])

@section('content')
    <main>
        <section class="position-relative page-hero-section">
            <div class="position-absolute top-0 start-0 w-100 h-100 with-image-overlay-gradient ">
                <img src="{{ asset('img/slonimska/img_slider_1.jpg') }}" alt="" width="1920" height="386"
                    loading="eager" decoding="async" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="container isolation-isolate">
                <div class="row row-gap-30">
                    <div class="col-12">
                        <nav aria-label="breadcrumb small text-white" data-aos="fade">
                            <ol class="breadcrumb opacity-50">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Strona</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Oferta</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div
                        class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 col-xxl-4 offset-xxl-4 text-white text-center">
                        <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">Slonimska Residence II</h1>
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

            <section class="s1" id="opis-inwestycji">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s1.jpg') }}" alt=""
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
                                        Nowe Mieszkania Białystok
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    „Słonimska Residence II” to planowany drugi etap i za razem najnowsza nieruchomość
                                    mieszkaniowa dewelopera Kalter Nieruchomości usytuowana w centrum miasta Białystok.
                                    Nowoczesna architektura budynku łączy klasyczne formy z aktualnymi i wyrazistymi
                                    trendami
                                    architektonicznymi. Inwestycja została zaprojektowana tak, aby wszystkie znajdujące się
                                    w
                                    niej nowe apartamenty były jasne, przestronne i doskonale oświetlone. Wszystko to za
                                    sprawą
                                    dogodnego usytuowania budynku – względem wszystkich czterech stron świata. Dodatkowym
                                    atutem
                                    inwestycji jest jej kameralna niska zabudowa, która daje komfort nieporównywalny z
                                    wysoką
                                    zabudową miejską. Dzięki takim rozwiązaniom mieszkańcy mają znacznie więcej możliwości
                                    na
                                    nawiązywanie pozytywnych relacji sąsiedzkich.
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
                                        Funkcjonalność<br>i styl
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    W naszej nowej inwestycji zaplanowaliśmy aż 37 funkcjonalnych lokali mieszkalnych o
                                    metrażach od 28 do 86 m². Każde z mieszkań będzie w pełni przystosowane do wymogów i
                                    oczekiwań nawet najbardziej wymagających mieszkańców. W budynku przewidziano wiele
                                    udogodnień, z których jedną z najbardziej interesującyh, ma być duży i zaaranżowany
                                    zielenią
                                    taras widokowy na dachu budynku.
                                </p>
                                <p>
                                    Kwintesencją nowoczesnego budownictwa w „Słonimska Residence”, mają być duże przestronne
                                    okna oraz przepiękne lukarny i okna połaciowe, dzięki którym inwestycja wpisuje się w
                                    najwyższe standardy mieszkaniowe dostępne na rynku nowych mieszkań w Białymstoku.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s2.jpg') }}" alt=""
                                    width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s3.jpg') }}" alt=""
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
                                        Komfort<br>i przestrzeń
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    W każdym nowym mieszkaniu w Białymstoku przewidzieliśmy przestronne oświetlone balkony
                                    oraz
                                    loggie. Natomiast mieszkania znajdujące się na parterze mają mieć własne, spokojne
                                    ogródki,
                                    które pozwolą mieszkańcom cieszyć się urokami domowego życia w centrum miasta. Co
                                    więcej,
                                    ogródki mają być osłonięte budynkiem od strony ulicy, co dodatkowo podniesie komfort i
                                    prywatność mieszkańców i pozwoli im cieszyć się z kameralnego klimatu w samym centrum
                                    metropolii Białostockiej.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s4"  id='atuty'>
                <div class="container">
                    <div class="row row-gap-4 align-items-center">

                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div style="--translate-x: 0;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                        height="168" loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Strefy relaksu
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Na terenie inwestycji zaplanowaliśmy również dwie strefy rekreacyjne oraz komórki
                                    lokatorskie, a także przestronny podziemny garaż z indywidualnymi miejscami parkingowymi
                                    dopasowanymi do potrzeb mieszkańców i ich pojazdów. Inwestycja zostanie również
                                    wyposażona w pięknie zaaranżowaną zieleń oraz małą architekturę. Bezpieczeństwo nowych
                                    mieszkań w Białymstoku ma zapewniać nowoczesny system monitoringu wokół budynku oraz
                                    bezawaryjne wideodomofony – w konsekwencji wszystkie osoby nieupoważnione nie będą miały
                                    wstępu do budynku, a co za tym idzie, również do ogródków mieszczących się na terenie
                                    inwestycji.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s4.jpg') }}" alt=""
                                    width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s5">
                <div class="container">
                    <div class="row row-gap-4 align-items-center">
                        <div class="col-12 col-md-6 col-lg-5">

                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s5.jpg') }}" alt=""
                                    width="672" height="448" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div style="--translate-x: 0;"
                            class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                    height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                                <span data-aos="fade-up" data-aos-delay="200">
                                    Bezpieczeństwo
                                </span>

                            </h2>
                        </div>
                        <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                            <p>
                                Nieruchomość zostanie dodatkowo zabezpieczona solidnym ogrodzeniem od strony sąsiedniej
                                zabudowy, dzięki czemu mieszkańcy będą mogli zaaranżować je w sposób indywidualny z
                                naciskiem na prywatność.
                            </p>

                            <p>
                                Na komfort mieszkańców pozytywnie wpłyną również ciekawie zaaranżowane przestrzenie
                                wspólne
                                wewnątrz budynku, a także przestronne korytarze i klatka schodowa.
                            </p>

                            <p class='fw-semibold'>
                                Planowy termin rozpoczęcia budowy to 2024 rok.
                            </p>
                            <p class='fw-semibold'>
                                Za to już dziś można zobaczyć standard i niepowtarzalny styl w jakim został zrealizowany
                                pierwszy etap inwestycji!
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="s6">
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
                                        Bojary - Białystok
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Inwestycja „Słonimska Residence” zawdzięcza swoją nazwę od nazwy ulicy, przy której
                                    powstaje. Budynek mieszkalny ma być usytuowany przy ulicy Słonimskiej 34, która znajduje
                                    się na osiedlu Bojary w Białymstoku. Osiedle to jest jednym z najstarszych i zarazem
                                    najbardziej zabytkowych osiedli w mieście – niegdyś Bojary stanowiły jedną z najbardziej
                                    rozwiniętych dzielnic białostockich elit.
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s6.jpg') }}" alt=""
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
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s7.jpg') }}" alt=""
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
                                        Historyczna dusza
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Dziś na Bojarach dominują stylowe kamienice, zabytkowe nieruchomości mieszkalne i
                                    powojenne domy oraz bloki mieszkalne. Nadzwyczaj ciekawy układ urbanistyczny tych
                                    terenów jest pozostałością po dawnych szlakach komunikacyjnych. Dzielnica jest jednym z
                                    bezcennych świadectw historii Białegostoku, a powstająca w niej nasza najnowsza
                                    inwestycja „Słonimska Residence” oraz nowe mieszkania Bojary nieco przełamuje jej
                                    kompozycję i wprowadza powiew świeżości w nowoczesnym stylu.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="s8">
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
                                        Dogodna<br>infrastruktura
                                    </span>
                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Inwestycja znajduje się w niezwykle atrakcyjnej lokalizacji. W bezpośrednim sąsiedztwie
                                    nowych mieszkań w Białymstoku znajdą Państwo pełną infrastrukturę w postaci licznych
                                    sklepów, aptek oraz placówek zdrowia i urzędów. Ponadto, bliskość licznych lokali
                                    gastronomicznych i usługowych sprawi, że każdy z Państwa będzie mógł cieszyć się ze
                                    spędzania wolnej chwili w kameralnym klimacie Szlaku Bojar. Dodatkowym atutem inwestycji
                                    jest również bogata oferta instytucji oświatowych. Nowi mieszkańcy będą mogli liczyć
                                    tutaj na łatwy dostęp do żłobków, przedszkoli oraz szkół podstawowych i
                                    ponadpodstawowych.
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 offset-lg-1">
                            <div class="w-100 h-100" data-aos="fade">
                                <img class="img-fluid rounded" src="{{ asset('img/slonimska/s8.jpg') }}" alt=""
                                    width="555" height="699" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="section-localization mt-50" id="lokalizacja">
                <div class="container">
                    <div class="row row-gap-4  align-items-center">
                        <div class="col-12 col-md-6 col-lg-5 order-last order-md-0 ">
                            <div class="ratio ratio-16x9" data-aos="fade">
                                <div id="map"></div>
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
                                        Lokalizacja
                                    </span>

                                </h2>
                            </div>
                            <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                <p>
                                    Dzięki dobrze rozwiniętej infrastrukturze komunikacyjnej inwestycja „Słonimska
                                    ResidenceII”
                                    będzie mogła zaoferować mieszkańcom bezpośredni i szybki dojazd do ścisłego centrum
                                    miasta
                                    Białystok. Dodatkowym atutem będzie również brak konieczności korzystania z samochodu,
                                    aby
                                    móc korzystać z licznych atrakcji miasta – w 15 minut można dojść spacerem do Pałacu
                                    Branickich.
                                </p>
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
                                'name' => 'przystanek autobusowy linii 5',
                                'distance' => '450m',
                            ],
                            [
                                'name' => 'przystanek autobusowy linii 28',
                                'distance' => '450m',
                            ],
                            [
                                'name' => 'Park Barnickich',
                                'distance' => '990m',
                            ],
                            [
                                'name' => 'centrum handlowe',
                                'distance' => '1,4km',
                            ],
                        ];
                        
                        $list2 = [
                            [
                                'name' => 'żłobek',
                                'distance' => '160m',
                            ],
                            [
                                'name' => 'przedszkole publiczne',
                                'distance' => '1,2km',
                            ],
                            [
                                'name' => 'szkoła podstawowa',
                                'distance' => '51m',
                            ],
                            [
                                'name' => 'market spożywczy',
                                'distance' => '500m',
                            ],
                        ];
                        
                        $list3 = [
                            [
                                'name' => 'sklep osiedlowy',
                                'distance' => '300m',
                            ],
                            [
                                'name' => 'plac zabaw',
                                'distance' => '750m',
                            ],
                            [
                                'name' => 'przychodnia',
                                'distance' => '400m',
                            ],
                            [
                                'name' => 'Urząd Miejski',
                                'distance' => '600m',
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
                        'url' => asset('img/slonimska/img_slider_bot_1_1.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/slonimska/img_slider_bot_1_2.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/slonimska/img_slider_bot_1_3.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/slonimska/img_slider_bot_1_4.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/slonimska/img_slider_bot_1_5.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/slonimska/img_slider_bot_1_6.jpg'),
                        'alt' => 'Inwestycja „{{ $investment->name }}”',
                    ],
                    [
                        'url' => asset('img/slonimska/img_slider_bot_1_7.jpg'),
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
                center: [53.135222, 23.179694],
                zoom: 13,
            });
            L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(leafletMap)

            L.marker([53.135222, 23.179694], {
                icon: L.icon({
                    iconUrl: '{{ asset('img/marker.svg') }}',
                    iconSize: [55, 88],
                    iconAnchor: [28, 94],
                    popupAnchor: [0, -88],
                })
            }).addTo(leafletMap).bindPopup(
                '<p class="fw-bold text-white">Inwestycja „{{ $investment->name }}"</p>')
        });
    </script>
@endpush
