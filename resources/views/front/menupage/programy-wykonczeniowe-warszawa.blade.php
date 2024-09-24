@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', '$page->title')
@section('seo_title','$page->meta_title')
@section('seo_description', '$page->meta_description')
@section('seo_robots', '$page->meta_robots')

@section('content')
    <main class="with-bigger-section-spacing">

        @include('layouts.partials.page-header', ['h1' => 'Podstrona', 'desc' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.', 'header' => 'img/kredyty_bg.webp', 'mb' => 100])

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
                                <img class="img-fluid" src="{{ asset('img/cta_person.webp') }}" alt="" width="475" height="710" loading="lazy" decoding="async">
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

    </main>
@endsection
@push('scripts')

@endpush
