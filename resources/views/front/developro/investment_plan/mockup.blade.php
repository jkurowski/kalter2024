@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name)
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

                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                        @isset($investment->name)
                            <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">{{ $investment->name }}</h1>
                        @endisset
                        @isset($page->title_text)
                            <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">{{ $page->title_text }}</p>
                        @endisset
                    </div>
                </div>
            </div>
        </section>

        <section class="single-investment-search search section-search">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <form action="" class="bg-secondary text-white rounded d-flex row-gap-0 flex-wrap flex-sm-nowrap search-form" autocomplete="off">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 row-gap-3 align-items-end px-30 py-3 w-md-100 pb-md-40 pb-20">
                                <p class="col-12 w-100 text-uppercase mb-0">Wyszukiwarka</p>
                                <div class="col-12 w-100">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="showAll">
                                        <label class="form-check-label" for="showAll">
                                            Pokaż wszystkie
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <select name="step" id="step" class="form-select">
                                        <option value="0" selected>Etap</option>
                                        <option value="1">I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="city" id="city" class="form-select">
                                        <option value="0" selected>Miasto</option>
                                        <option value="Warszawa">Warszawa</option>
                                        <option value="Krakow">Krakow</option>
                                        <option value="Wroclaw">Wroclaw</option>
                                        <option value="Poznan">Poznan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="rooms" id="rooms" class="form-select">
                                        <option value="0" selected>Pokoje</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="garden" id="garden" class="form-select">
                                        <option value="0" selected>Ogródek</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="terrace" id="terrace" class="form-select">
                                        <option value="0" selected>Taras</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>

                            </div>
                            <div class="flex-fill">
                                <button type="submit" class="btn btn-primary w-100 h-100 fs-14 text-uppercase px-sm-4 d-flex align-items-center justify-content-center flex-sm-column gap-2 gap-sm-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.631" height="21.636" viewBox="0 0 21.631 21.636">
                                        <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search" d="M25.877,24.563l-6.016-6.072a8.573,8.573,0,1,0-1.3,1.318l5.977,6.033a.926.926,0,0,0,1.307.034A.932.932,0,0,0,25.877,24.563ZM13.124,19.882A6.77,6.77,0,1,1,17.912,17.9,6.728,6.728,0,0,1,13.124,19.882Z" transform="translate(-4.5 -4.493)" fill="#fff" />
                                    </svg>
                                    <span>
                                Szukaj
                            </span>
                                </button>
                            </div>
                        </form>
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

        <section>
            <div class="container">
                <div class="row">
                    {!! $investment->mockup !!}
                </div>
            </div>
        </section>
    </main>
@endsection