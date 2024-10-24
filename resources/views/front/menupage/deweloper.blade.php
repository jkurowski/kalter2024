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
            'header' => 'img/deweloper_bg.webp',
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
                                    O firmie
                                </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                    Klater nieruchomości
                                </span>
                            </h2>
                        </div>
                        <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                            <p>
                                Kalter Nieruchomości to spółka z Grupy Kalter utworzona w celu przygotowania, realizacji i
                                sprzedaży własnych inwestycji. Bazujemy na wieloletnim doświadczeniu Kalter Sp. z o. o.,
                                uznanego wykonawcy inwestycji mieszkaniowych na rynku białostockim i warszawskim.
                            </p>
                            <p>
                                Kalter Nieruchomości to przede wszystkim ciekawe projekty w atrakcyjnych lokalizacjach,
                                szeroki wybór mieszkań i lokali usługowych, a także jakość gwarantowana przez Kalter Sp. z
                                o. o. spełniająca oczekiwania wszystkich naszych klientów.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 offset-lg-2">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('/img/deweloper_s1.webp') }}" alt=""
                                width="555" height="471" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s2">
            <div class="container">
                <div class="row row-gap-4 align-items-center  pb-5">
                    <div class="col-12">
                        <div style="--translate-x: 0;"
                            class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                    height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                                <span data-aos="fade-up" data-aos-delay="200">
                                    Kim jesteśmy?
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-md-8 offset-md-2">
                        <div class="text-pretty " data-aos="fade">
                            <p>
                                Grupa Kalter powstała na bazie wieloletniego doświadczenia Spółki Kalter sp. z o.o..
                            </p>
                            <p>
                                Kalter Sp. z o. o. to uznana na rynku firma budowlana, posiadająca bogate doświadczenie jako
                                Generalny Wykonawca inwestycji w zakresie budownictwa mieszkaniowego i użyteczności
                                publicznej.
                            </p>
                            <p>
                                Wraz z rozwojem spółki równolegle do podstawowego jej profilu działalności zaczęły rozwijać
                                się nowe profile (pochodne) działalności takie jak usługi deweloperskie oraz wynajem
                                nieruchomości komercyjnych.
                            </p>
                            <p>
                                W 2017 roku udziałowcy spółki podjęli decyzję o wydzieleniu ze struktur Kalter sp. z o.o.
                                działalności deweloperskiej oraz działalności związanej z wynajmem nieruchomości, tak
                                powstały spółki Kalter Nieruchomości sp. z o.o. oraz Kalter sp. z o.o. Sp.K. Obszarem
                                działalności Grupy jest rejon województwa mazowieckiego, łódzkiego i podlaskiego.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="s3">
            <div class="container">

                <div class="row row-gap-4 align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 offset-xl-3 text-center text-md-start order-last order-md-0">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('/img/deweloper_s3.webp') }}" alt=""
                                width="321" height="471" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7 offset-lg-1 offset-xl-0 col-xl-5">
                        <div class="text-pretty" data-aos="fade">
                            <p class="fs-5 fw-semibold text-secondary">
                                Profesjonalizm i fachowość
                            </p>
                            <p>
                                Jako Grupa jesteśmy w stanie realizować dowolne projekty budowlane o złożonym stopniu
                                trudności, przy jednoczesnym utrzymaniu niskich kosztów funkcjonowania.
                            </p>
                            <p>
                                Gwarantujemy wysoką jakość świadczonych usług, zapewniamy profesjonalną, stałą współpracę z
                                Inwestorem oraz pewność, że powierzone nam zadania znajdują się w rękach fachowców.
                            </p>
                            <p>
                                Za cel postawiliśmy sobie, aby współpraca z nami oraz realizowane przez nas inwestycje
                                przynosiły wymierne korzyści naszym Klientom.
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="s4">
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
                                    Misja
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div data-aos="fade">
                            <div style="width:87px; height:87px;"
                                class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/misja_1.svg') }}" alt="" loading="lazy" decoding="async"
                                    width="42" height="42">
                            </div>
                            <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Misja</p>
                            <p class="text-pretty">
                                Misją naszej Grupy jest profesjonalne, kompleksowe zaspokajanie potrzeb i oczekiwań naszych
                                Klientów w zakresie realizacji powierzonych nam inwestycji budowlanych.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div data-aos="fade">

                            <div style="width:87px; height:87px;"
                                class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/misja_2.svg') }}" alt="" loading="lazy" decoding="async"
                                    width="42" height="42">
                            </div>
                            <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Realizacja</p>
                            <p class="text-pretty">
                                Realizację stawianych Grupie celów zapewnia sprawdzona, wysoko wykwalifikowana kadra, mająca
                                bogate doświadczenie w prowadzeniu przedsięwzięć budowlanych.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div data-aos="fade">

                            <div style="width:87px; height:87px;"
                                class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/misja_3.svg') }}" alt="" loading="lazy" decoding="async"
                                    width="42" height="42">
                            </div>
                            <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Zarządzanie</p>
                            <p class="text-pretty">
                                Sprawne zarządzanie, ciągłe doskonalenie się oraz konsekwencja w działaniu pozwala zapewnić
                                naszym klientom konkurencyjne ceny świadczonych usług i oferowanych produktów.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div data-aos="fade">

                            <div style="width:87px; height:87px;"
                                class="mb-30 bg-white icon-shadow mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img/misja_4.svg') }}" alt="" loading="lazy" decoding="async"
                                    width="42" height="42">
                            </div>
                            <p class="fs-5 fw-semibold text-secondary  text-center mb-4">Satysfakcja</p>
                            <p class="text-pretty">
                                Satysfakcję z wykonywanej pracy daje nam zadowolenie naszych Klientów pozwalające wdrażać w
                                życie motto Grupy „Profesjonalizm za rozsądną cenę”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s5">
            <div class="container">
                <div class="row row-gap-4 align-items-center  pb-5">
                    <div class="col-12">
                        <div style="--translate-x: 0;"
                            class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168"
                                    height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                                <span data-aos="fade-up" data-aos-delay="200">
                                    Polityka
                                </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                    Jakości
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4 align-items-center">
                    <div class="col-12 col-md-5">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('/img/deweloper_s5.webp') }}" alt=""
                                width="555" height="555" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-5 offset-lg-1">
                        <div class="text-pretty" data-aos="fade">
                            <p class="fs-5 fw-semibold text-secondary">
                                Cel działalności grupy Kalter
                            </p>
                            <p>
                                Celem działalności Grupy KALTER jest świadczenie usług spełniających wysokie wymagania
                                jakościowe, uwzględniające indywidualne potrzeby i wymagania stawiane przez Klientów oraz
                                dynamicznie rozwijający się rynek usług budowlanych.
                            </p>
                            <p class="fs-5 fw-semibold text-secondary pt-md-4">
                                Polityka naszej Grupy
                            </p>
                            <p>
                                Polityka naszej Grupy, wspierana przez Autorski System Zarządzania Jakością, wynika z
                                przyjętej strategii rozwoju, której nadrzędnym celem jest dążenie do wysokiej jakości,
                                efektywności jak i terminowości wykonania realizowanych inwestycji budowlanych. Podstawą
                                naszych działań jest dbanie o zadowolenie Klienta oraz rozwój naszej organizacji.
                            </p>
                            <p class="fs-5 fw-semibold text-secondary pt-md-4">
                                Założenia
                            </p>
                            <p>
                                Powyższe założenia są zgodne z wdrożonym i utrzymywanym Autorskim Systemem Zarządzania
                                Jakością AS Jakości, co zapewnia optymalizowanie kosztów świadczonych przez naszą
                                organizację usług przy zachowaniu ich wysokiej jakości, które leżą u podstaw budowy trwałych
                                relacji z naszymi klientami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative cta">
            <img src="{{ asset('img/cta_bg.webp') }}" alt="Tło call to action" width="1920" height="1080"
                class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" loading="lazy" decoding="async">
            <div class="container z-2">
                <div class="row">
                    <div class="col-12 text-white mb-5 pb-4">

                        <div style="--translate-x: 0;"
                            class="position-relative text-center d-flex flex-column justify-content-center align-items-center ">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet.svg') }}" alt="" width="168" height="168"
                                    loading="lazy" decoding="async" data-aos="fade" class="aos-init aos-animate">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                                <span data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                                    Zapytaj
                                </span>
                                <span class="fw-900 fs-4 d-block text-center aos-init aos-animate" data-aos="fade-up"
                                    data-aos-delay="400">
                                    o lokal
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-12 col-lg-10">
                        <div class="contact-form-container text-secondary pe-lg-5">
                            <div class="position-absolute cta-person z-2">
                                <img class="img-fluid" src="{{ asset('img/cta_person.webp') }}" alt=""
                                    width="475" height="710" loading="lazy" decoding="async">
                            </div>
                            <p class="fs-5 text-uppercase fw-semibold text-secondary">FORMULARZ KONTAKTOWY</p>

                            @include('components.contact-form')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
