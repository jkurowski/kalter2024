@extends('layouts.page', ['body_class' => 'investments'])

@section('meta_title', $page->title.' - '.$investment->name)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

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

        @include('front.investments.single-investment-search', ['investment' => $investment])

        <section class="sticky-top py-0 bg-white sticky-top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        @include('front.investments.submenu', ['menuIds' => $investment->menu, 'activeMenuId' => 6])
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
