@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <section class="position-relative page-hero-section page-hero-section-small">
        <div class="position-absolute top-0 start-0 w-100 h-100 with-image-overlay-gradient ">
            <img src="{{ asset('img/oferta_bg.webp') }}" alt="" width="1920" height="386" loading="eager"
                 decoding="async" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="container isolation-isolate">
            <div class="row row-gap-10">
                <div class="col-12">
                    <nav aria-label="breadcrumb small text-white" data-aos="fade" class="aos-init aos-animate">
                        <ol class="breadcrumb opacity-50">
                            <li class="breadcrumb-item">
                                <a href="/" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Strona główna</a>
                            </li>
                            <li class="breadcrumb-item" style="--bs-breadcrumb-divider-color: var(--bs-white);">
                                <a href="#" style="--bs-secondary: var(--bs-white);--bs-breadcrumb-item-active-color: var(--bs-white);">Wyniki wyszukiwania</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-white text-center">
                    @isset($page->title)
                        <h1 class="h2 mb-3 text-uppercase" data-aos="fade-up">Wyniki wyszukiwania</h1>
                    @endisset
                    @isset($page->title_text)
                        <p class="text-pretty" data-aos="fade-up" data-aos-delay="200">{{ $page->title_text }}</p>
                    @endisset
                </div>
            </div>
        </div>
    </section>
    @include('front.investments.search')
    <section>
        <div class="container">
            <div class="row pb-4">
                <div class="col-12">
                    Liczba wyników: {{ $results->sum(fn($result) => $result['properties']->count()) }}
                </div>
            </div>
            <div class="row">
                @foreach ($results as $result)
                    <x-investment-list-item :investment="$result['investment']" :properties="$result['properties']" />
                @endforeach
            </div>
        </div>
    </section>
@endsection
