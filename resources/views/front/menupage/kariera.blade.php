@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main class="with-bigger-section-spacing">

        @include('layouts.partials.page-header', [
            'h1' => $page->title,
            'desc' => $page->title_text,
            'header' => 'img/kariera_bg.webp',
            'mb' => 100,
        ])

        <section class="s1">
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
                                    Szukasz pracy?
                                </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                    SPRAWDŹ NASZĄ OFERTĘ
                                </span>
                            </h2>
                        </div>
                        <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                            <p>
                                Dobrze dobrany zespół potrafi sprostać stawianym mu wyzwaniom, wzajemnie się wspierać,
                                wspólnie rozwiązywac problemy i nawzajem się inspirować.
                            </p>
                            <p>
                                Stworzyliśmy taki zespół i ciągle dbamy o jego rozwój poprzez różnego rodzaju szkolenia
                                grupowe i indywidualne. Dbamy też o podtrzymywanie dobrych, nie tylko zawodowych więzi
                                organizując spotkania i wyjazdy integracyjne.
                            </p>
                            <p>
                                Naszą siłą jest różnorodność naszych wspólnych doświadczeń, kreatywność w rozwiązywaniu
                                problemów i wzajemna pomoc zwłaszcza osobom nowozatrudnionym.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 offset-lg-2">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('img/kariera_s1.webp') }}" alt=""
                                width="555" height="471" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s2">
            <div class="container">
                <div class="row row-gap-4 align-items-center mb-50">
                    <div class="col-12">
                        <div style="--translate-x: 0;"
                            class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                    height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                                <span data-aos="fade-up" data-aos-delay="200">
                                    Aktualnie
                                </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                    poszukujemy
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <div class="accordion" id="accordionPanelsStayOpenExample" data-aos="fade">
                            <div class="accordion-item shadow-post-article mb-30">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-24" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Specjalista Ds. Nieruchomości
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <p>Zawiążemy współpracę ze specjalistą do spraw nieruchomości, którego zadaniem
                                            byłoby poszukiwanie nowych gruntów pod inwestycje deweloperskie (budownictwo
                                            mieszkaniowe wielorodzinne) w rejonie Warszawy i Białegostoku. </p>
                                        <p class="fw-semibold fs-5 text-secondary pt-4 mb-2">Zadania</p>
                                        <ul>
                                            <li class="mb-2">poszukiwanie nowych nieruchomości gruntowych pod zabudowę
                                                mieszkaniową,</li>
                                            <li class="mb-2">zbieranie informacji na temat lokalizacji, powierzchni, planu
                                                miejscowego lub studium,</li>
                                            <li class="mb-2">sporządzanie i przedstawianie Spółce zebranych informacji na
                                                temat nieruchomości,</li>
                                            <li class="mb-2">udział w negocjacjach ze Sprzedającym</li>
                                        </ul>
                                        <p class="fw-semibold fs-5 text-secondary pt-4 mb-2">Oferujemy</p>
                                        <p>Oferujemy atrakcyjne wynagrodzenie prowizyjne ustalane na podstawie efektów
                                            wykonanej pracy. </p>
                                        <div class="pt-4 pt-md-40">
                                            <a href="#aplikuj"
                                                class="btn btn-primary btn-with-icon min-w-max-content flex-fill d-inline-flex align-items-center justify-content-center gap-1">
                                                Aplikuj
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                                    viewBox="0 0 6.073 11.062">
                                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                                        d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                                        transform="translate(-356 684)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item shadow-post-article">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-24" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Kierownik projektów deweloperskich
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Zawiążemy współpracę ze specjalistą do spraw nieruchomości, którego zadaniem
                                            byłoby poszukiwanie nowych gruntów pod inwestycje deweloperskie (budownictwo
                                            mieszkaniowe wielorodzinne) w rejonie Warszawy i Białegostoku. </p>
                                        <p class="fw-semibold fs-5 text-secondary pt-4 mb-2">Zadania</p>
                                        <ul>
                                            <li class="mb-2">poszukiwanie nowych nieruchomości gruntowych pod zabudowę
                                                mieszkaniową,</li>
                                            <li class="mb-2">zbieranie informacji na temat lokalizacji, powierzchni, planu
                                                miejscowego lub studium,</li>
                                            <li class="mb-2">sporządzanie i przedstawianie Spółce zebranych informacji na
                                                temat nieruchomości,</li>
                                            <li class="mb-2">udział w negocjacjach ze Sprzedającym</li>
                                        </ul>
                                        <p class="fw-semibold fs-5 text-secondary pt-4 mb-2">Oferujemy</p>
                                        <p>Oferujemy atrakcyjne wynagrodzenie prowizyjne ustalane na podstawie efektów
                                            wykonanej pracy. </p>
                                        <div class="pt-4 pt-md-40">
                                            <a href="#aplikuj"
                                                class="btn btn-primary btn-with-icon min-w-max-content flex-fill d-inline-flex align-items-center justify-content-center gap-1">
                                                Aplikuj
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                                    viewBox="0 0 6.073 11.062">
                                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                                        d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                                        transform="translate(-356 684)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s3" id="aplikuj">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                        <div style="--translate-x: 0;"
                            class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                    height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                                <span data-aos="fade-up" data-aos-delay="200">
                                    Dołącz
                                </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                    do zespołu
                                </span>
                            </h2>
                        </div>
                        <div class="text-pretty mt-4 mt-md-40 text-secondary" data-aos="fade">
                            <p>

                                Będąc dynamicznie rozwijającą się polską firmą, w swojej pracy kierujemy się wartościami.
                                Stawiamy przede wszystkim na ludzi, szanujemy środowisko naturalne, odpowiedzialnie
                                traktujemy podjęte zobowiązania umowne i zawsze dotrzymujemy słowa. Takie podejście
                                przekazujemy również naszym pracownikom.
                            </p>


                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 offset-lg-2 offset-xl-3">
                        <div class="apply-form-container text-secondary" data-aos="fade">
                            <p class="fs-5 text-uppercase fw-semibold text-secondary">FORMULARZ</p>
                            @include('components.contact-form-kariera')
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
@push('scripts')
@endpush
