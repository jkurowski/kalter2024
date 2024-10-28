@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main>

        <section class="position-relative page-hero-section mb-40">
            <div class="position-absolute top-0 start-0 w-100 h-100 with-image-overlay-gradient ">
                @if($investment->file_header)
                    <img src="{{ asset('investment/header/'.$investment->file_header) }}" alt="" width="1920" height="386" loading="eager" decoding="async" class="w-100 h-100 object-fit-cover">
                @endif
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
                                    <a href="{{ route('developro.index') }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Oferta mieszkań</a>
                                </li>
                                <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                    <a href="{{ route('developro.show', $investment->slug) }}" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">{{ $investment->name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 col-xxl-4 offset-xxl-4 text-white text-center">
                        <h1 class="h2 mb-3" data-aos="fade-up">{{ $investment->name }}</h1>
                        <p class="text-pretty d-none" data-aos="fade-up" data-aos-delay="200">„Na Skraju”, to nasza najnowsza inwestycja usytuowana w dynamicznie rozwijającej się dzielnicy Ursus przy ul. Henryka Brodatego 51.</p>
                    </div>
                </div>
            </div>
        </section>

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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                        <div class="text-secondary text-center post-hero-padding">
                            <h1 class="h2">{{ $investment_news->title }}</h1>
                            <p class="fs-14 fw-900 ff-secondary">{{ $investment_news->date }}</p>
                            <picture>
                                @if($investment_news->file_webp)
                                    <source type="image/webp" srcset="{{asset('uploads/articles/webp/'.$investment_news->file_webp) }}">
                                @endif
                                <source type="image/jpeg" srcset="{{asset('uploads/articles/'.$investment_news->file) }}">
                                <img src="{{asset('uploads/articles/'.$investment_news->file) }}" alt="@if($investment_news->file_alt){{$investment_news->file_alt}}@else{{$investment_news->title}}@endif" class="img-fluid rounded mt-4 mt-md-30">
                            </picture>
                        </div>

                        <div class="post-content">
                            {!! parse_text($investment_news->content, true) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
