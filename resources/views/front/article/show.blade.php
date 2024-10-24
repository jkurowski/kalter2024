@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title .' - '.$article->title)
@section('seo_title',$page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main class="with-bigger-section-spacing">

        <section class="position-relative page-hero-section pb-0 min-h-auto">
            <div class="container isolation-isolate">
                <div class="row row-gap-30">
                    <div class="col-12">
                        <nav aria-label="breadcrumb small text-white" data-aos="fade">
                            <ol class="breadcrumb breadcrumb-black ">
                                <li class="breadcrumb-item">
                                    <a href="/">Strona główna</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('aktualnosci.index')}}">Aktualności</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">{{$article->title}}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="slider">
            <div class="container">
                <div class="row pb-md-3">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="img/sygnet_secondary.svg" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Sprawdź
                            </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                Podobne aktualności
                            </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-11">
                    <div class="post-details">
                        <picture>
                            @if($article->file_webp)
                            <source type="image/webp" srcset="{{asset('uploads/articles/webp/'.$article->file_webp) }}">
                            @endif
                            <source type="image/jpeg" srcset="{{asset('uploads/articles/'.$article->file) }}">
                            <img src="{{asset('uploads/articles/'.$article->file) }}" alt="@if($article->file_alt){{$article->file_alt}}@else{{$article->title}}@endif">
                        </picture>

                        <div class="post-details-entry mt-3 mb-3">
                            <h1 class="post-details-title">{{ $article->title }}</a></h1>
                            <p><b>{{$article->content_entry}}</b></p>
                        </div>
                        <div class="post-details-text">
                            <p>{!! parse_text($article->content) !!}</p>
                        </div>
                        <a href="{{route('aktualnosci.index')}}" class="bttn mt-4">WRÓĆ DO LISTY</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@push('scripts')

@endpush
