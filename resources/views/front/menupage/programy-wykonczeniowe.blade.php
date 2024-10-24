@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title',$page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main class="with-bigger-section-spacing page-{{ $uri }}">

        @include('layouts.partials.page-header', ['h1' => $page->title, 'desc' => $page->title_text,  'header' => 'img/kredyty_bg.webp'])

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <nav class="fixed-top-menu bg-white" id="navbar-secondary">
                            <ul class="navbar-nav with-underline-active nav-snap-md-down flex-row justify-content-center py-3 nav" style="--bs-nav-link-color: var(--bs-secondary);--bs-nav-link-hover-color: var(--bs-primary); --bs-navbar-active-color: var(--bs-secondary);">
                                <li class="nav-item m-3">
                                    <a class="nav-link active" id="program-1-tab" data-bs-toggle="tab" href="#program-1" role="tab">Warszawa</a>
                                </li>
                                <li class="nav-item m-3">
                                    <a class="nav-link" id="program-2-tab" data-bs-toggle="tab" href="#program-2" role="tab">Łodź</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="program-1" role="tabpanel">
                <section class="s1">
                    <div class="container">
                        <div class="row row-gap-4 align-items-center">
                            <div class="col-12 col-md-7">
                                <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                    <div class="position-absolute top-50 start-50 translate-middle z-2">
                                        <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                    </div>
                                    <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Home
                            </span>
                                        <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                Planner
                            </span>
                                    </h2>
                                </div>
                                <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                    <p>
                                        „Tworzymy Twoje miejsce na ziemi razem z Tobą”.
                                    </p>
                                    <p>
                                        Home Planer został założony w 2021 roku jako rozszerzenie działalności firmy Master Planer, obecnej na rynku od 2006 roku i specjalizującej się w wykroczeniach wnętrz komercyjnych.
                                    </p>
                                    <p>
                                        Posiadamy bogatą wiedzę oraz wyspecjalizowane ekipy budowlane, co umożliwia nam kompleksowe prowadzenie projektów na każdym etapie realizacji. Współpracujemy wyłącznie z renomowanymi i sprawdzonymi brygadami, posiadającymi odpowiednie kwalifikacje.
                                    </p>
                                    <p>
                                        Dzięki stałym zespołom jesteśmy pewni, że każda usługa jest wykonywana na najwyższym poziomie. Zapewniamy inwestorom stały nadzór wykwalifikowanych kierowników robót, opiekuna klienta oraz wiedzę doświadczonych projektantów wnętrz.
                                    </p>
                                    <p>
                                        Naszą misją jest spełnianie marzeń o stylowym i komfortowym domu, dlatego do każdego projektu podchodzimy indywidualnie, dbając o najmniejsze detale.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="w-100 h-100" data-aos="fade">
                                    <img class="img-fluid rounded" src="{{ asset('/img/programy_wykonczeniowe_s1.webp') }}" alt="" width="555" height="555" loading="eager">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s2">
                    <div class="container">
                        <div class="row row-gap-4">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div data-aos="fade">
                                    <div style="width:87px; height:87px;" class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s2_1.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Profesjonalizm<br> i terminowość</p>
                                    <p class="text-pretty text-center">
                                        Profesjonalne podejście do pracy oraz terminowe wykonanie projektów.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div data-aos="fade">

                                    <div style="width:87px; height:87px;" class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s2_2.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Doświadczenie<br> i umiejętności</p>
                                    <p class="text-pretty text-center">
                                        Bogate doświadczenie w różnorodnych projektach oraz szerokie umiejętności w zakresie wykańczania wnętrz
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div data-aos="fade">

                                    <div style="width:87px; height:87px;" class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s2_3.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Kreatywność<br> i wizja</p>
                                    <p class="text-pretty text-center">
                                        Nowatorskie koncepcje, tworzenie unikalnych i atrakcyjnych wnętrz.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div data-aos="fade">

                                    <div style="width:87px; height:87px;" class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s2_4.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Dbanie<br> o klienta</p>
                                    <p class="text-pretty text-center">
                                        Rzetelność w działaniu oraz otwartość, jasną komunikację z klientami na każdym etapie projektu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s3">
                    <div class="container">
                        <div class="row row-gap-4 align-items-center mb-50 mb-md-100">
                            <div class="col-12">
                                <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                    <div class="position-absolute top-50 start-50 translate-middle z-2">
                                        <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                    </div>
                                    <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Pakiety
                            </span>
                                        <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                wykończeniowe
                            </span>
                                    </h2>
                                </div>
                                <div class="text-pretty mt-4 mt-md-40 text-center" data-aos="fade">
                                    <p>
                                        Nasz zespół jest po to aby cię wspierać na każdy kroku
                                        <br>
                                        realizowanego projektu.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="row row-gap-4 align-items-center justify-content-center">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="w-100 h-100 text-center" data-aos="fade">
                                    <img class="img-fluid rounded" src="{{ asset('img/programy_wykonczeniowe_s3_1.webp') }}" alt="" width="438" height="438" loading="lazy" decoding="async">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="w-100 h-100 text-center" data-aos="fade">
                                    <img class="img-fluid rounded" src="{{ asset('img/programy_wykonczeniowe_s3_2.webp') }}" alt="" width="438" height="438" loading="lazy" decoding="async">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="w-100 h-100 text-center" data-aos="fade">
                                    <img class="img-fluid rounded" src="{{ asset('img/programy_wykonczeniowe_s3_3.webp') }}" alt="" width="438" height="438" loading="lazy" decoding="async">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s4">
                    <div class="container">
                        <div class="row row-gap-4 align-items-center">

                            <div class="col-12 col-md-5 order-last order-md-0">
                                <div class="w-100 h-100" data-aos="fade">
                                    <img class="img-fluid rounded" src="{{ asset('img/programy_wykonczeniowe_s4.webp') }}" alt="" width="555" height="555" loading="lazy" decoding="async">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-xl-5 offset-xl-1">
                                <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                    <div class="position-absolute top-50 start-50 translate-middle z-2">
                                        <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                    </div>
                                    <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                jAK DZIAŁAMY?
                            </span>
                                        <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                Planner
                            </span>
                                    </h2>
                                </div>
                                <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                    <p>Prace projektowe z klientem zazwyczaj zaczynam około 2-3 miesięcy przed planowanym odbiorem mieszkania. W pierwszej kolejności klient wybiera, czy pracujemy na bazie Pakietu „pod klucz” czy projektu indywidualnego. Następnym krokiem jest podpisanie umowy oraz rozpoczęcie prac projektowych. Proces ten obejmuje zebranie dokumentacji technicznej, analizę oraz wprowadzenie ewentualnych zmian w układzie funkcjonalnym całego mieszkania/domu, a także przygotowanie kosztorysu.</p>
                                    <p>Po zatwierdzeniu projektu przez klienta, rozpoczynamy proces zakupu materiałów wybranych. Kolejnym krokiem jest odbiór mieszkania z klientem, w trakcie którego sprawdzamy mieszkania od strony technicznej. Następnie, po otrzymaniu kluczy od klienta i ponownym przeglądzie mieszkania, rozpoczynamy prace wykończeniowe, które trwają zazwyczaj max 10 tygodni.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s5 pt-0 mt-md-3">
                    <div class="container">
                        <div class="row row-gap-4 justify-content-center">


                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex flex-column flex-sm-row  column-gap-3 align-items-center" data-aos="fade">
                                    <div style="min-width:87px; height:87px;" class="mb-30 bg-white icon-shadow rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s5_1.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary mb-4 text-balance text-center text-sm-start">Wybierasz najlepszy<br> pakiet dla Ciebie</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex flex-column flex-sm-row justify-content-lg-center column-gap-3 align-items-center" data-aos="fade">
                                    <div style="min-width:87px; height:87px;" class="mb-30 bg-white icon-shadow rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s5_2.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary mb-4 text-balance text-center text-sm-start">Projektujemy<br> i wybieramy materiały</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="d-flex flex-column flex-sm-row justify-content-lg-end column-gap-3 align-items-center" data-aos="fade">
                                    <div style="min-width:87px; height:87px;" class="mb-30 bg-white icon-shadow rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s5_3.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary mb-4 text-balance text-center text-sm-start">Odbierasz klucze<br> do gotowego mieszkania</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 ">
                                <div class="d-flex flex-column flex-sm-row justify-content-lg-center column-gap-3 align-items-center" data-aos="fade">
                                    <div style="min-width:87px; height:87px;" class="mb-30 bg-white icon-shadow rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s5_4.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary mb-4 text-balance text-center text-sm-start">Podpisujemy<br> umowę</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 ">
                                <div class="d-flex flex-column flex-sm-row justify-content-lg-center column-gap-3 align-items-center" data-aos="fade">
                                    <div style="min-width:87px; height:87px;" class="mb-30 bg-white icon-shadow rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('img/programy_wykonczeniowe_s5_5.svg') }}" alt="" loading="lazy" decoding="async" width="42" height="42">
                                    </div>
                                    <p class="fs-5 fw-semibold text-secondary mb-4 text-balance text-center text-sm-start">My prowadzimy<br> prace budowlane</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="program-2" role="tabpanel">
                <section class="s1">
                    <div class="container">
                        <div class="row row-gap-4 align-items-center">
                            <div class="col-12 col-md-7">
                                <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                    <div class="position-absolute top-50 start-50 translate-middle z-2">
                                        <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                    </div>
                                    <h2 class="fw-bold text-center text-uppercase">
                                        <span data-aos="fade-up" data-aos-delay="200">Jesion</span>
                                        <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">Inwestycje Budowlane</span>
                                    </h2>
                                </div>
                                <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                                    <p>Jesion Inwestycje Budowlane to firma rodzinna, która funkcjonuje na polskim rynku od 1990 roku. Stopniowo rozszerzała skalę działania, realizując coraz większe i bardziej ambitne projekty. Ogromne doświadczenie oraz zdobyte zaufanie ze strony Klientów, pozwoliło jej na zajęcie pozycji jednego z liderów na łódzkim rynku wykończeń wnętrz. W swoich działaniach kierujemy się następującymi wartościami: konsekwencją, zaufaniem, profesjonalizmem i odpowiedzialnością</p>
                                    <p>Oferowane przez nas pakiety wykończeniowe, dostosowane do budżetu Klienta, pozwalają na oszczędność czasu i stresu podczas prac wykończeniowych. Indywidualny projekt, określony harmonogram prac i sprawdzeni wykonawcy to gwarancja satysfakcji.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="w-100 h-100" data-aos="fade">
                                    <img class="img-fluid rounded" src="{{ asset('/img/programy_wykonczeniowe_s1.webp') }}" alt="" width="555" height="555" loading="eager">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s2">
                    <div class="container">
                        <div class="row row-gap-4">
                            <div class="col-12">
                                <ul class="programs jesion-programs">
                                    <li class="pakiet-basic">
                                        <h3 class="h3">PAKIET<strong>BASIC</strong></h3>
                                        <div class="icon">
                                            <img src="{{ asset('img/jesion-pakiet-basic.png') }}" alt="Pakiet Basic" />
                                        </div>
                                        <div class="desc">
                                            <p>Najlepszy stosunek ceny do jakości</p>
                                        </div>
                                        <div class="stars">
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                        </div>
                                        <a href="/uploads/pakiety_jesion_2022.pdf">Pobierz katalog </a></li>
                                    <li class="pakiet-premium">
                                        <h3 class="h3">PAKIET<strong>PREMIUM</strong></h3>
                                        <div class="icon">
                                            <img src="{{ asset('img/jesion-pakiet-premium.png') }}" alt="Pakiet Premium" />
                                        </div>
                                        <div class="desc">
                                            <p>Dla os&oacute;b chcących dokonać większych zmian z wykorzystaniem materiał&oacute;w z wyższego segmentu</p>
                                        </div>
                                        <div class="stars">
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                        </div>
                                        <a href="/uploads/pakiety_jesion_2022.pdf">Pobierz katalog </a></li>
                                    <li class="pakiet-vip">
                                        <h3 class="h3">PAKIET<strong>VIP</strong></h3>
                                        <div class="icon">
                                            <img src="{{ asset('img/jesion-pakiet-vip.png') }}" alt="Pakiet VIP" />
                                        </div>
                                        <div class="desc">
                                            <p>Dla os&oacute;b kt&oacute;rzy nie chcą iść na kompromisy. Największe możliwości adaptacji mieszkania z wykorzystaniem materiał&oacute;w z najwyższego segmentu</p>
                                        </div>
                                        <div class="stars">
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                            <img src="{{ asset('img/star-32.png') }}" alt="icon" width="32" height="32" />
                                        </div>
                                        <a href="/uploads/pakiety_jesion_2022.pdf">Pobierz katalog </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <blockquote>
                                    <p class="mb-0">Spełniamy marzenia budowlane naszych Klientów</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="s4 pt-0">
                    <div class="container">
                        <div class="row row-gap-4 align-items-center mb-50 mb-md-100">
                            <div class="col-12">
                                <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                    <div class="position-absolute top-50 start-50 translate-middle z-2">
                                        <img src="http://newkalter.test/img/sygnet_secondary.svg" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                                    </div>
                                    <h2 class="fw-bold text-center text-uppercase">
                                        <span data-aos="fade-up" data-aos-delay="200">Masz</span>
                                        <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">pytania?</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-4 pb-4 pb-md-0 text-center">
                                <p class="mb-0"><strong>ILONA GRZYBOWSKA</strong></p>
                                <p class="mb-0"><em>Handlowiec</em></p>
                                <p class="mb-0"><a href="tel:+48733765676">+48 733 765 676</a></p>
                                <p class="mb-0"><a href="mailto:ilona@jesion.eu">ilona@jesion.eu</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <section class="position-relative cta">
            <img src="{{ asset('img/cta_bg.webp') }}" alt="Tło call to action" width="1920" height="1080" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" loading="lazy" decoding="async">
            <div class="container z-2">
                <div class="row">
                    <div class="col-12 text-white mb-5 pb-4">

                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center ">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade" class="aos-init aos-animate">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                                Masz pytania?
                            </span>
                                <span class="fw-900 fs-4 d-block text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                Napisz do nas!
                            </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-12 col-lg-10">
                        <div class="contact-form-container text-secondary pe-lg-5">
                            <div class="position-absolute cta-person z-2">
                                <img class="img-fluid" src="{{ asset('img/cta_person.webp') }}" alt="" width="475" height="710" loading="lazy" decoding="async">
                            </div>
                            <p class="fs-5 text-uppercase fw-semibold text-secondary">FORMULARZ KONTAKTOWY</p>

                            @include('components.contact-form', ['page' => $page->title])
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@push('scripts')

@endpush
