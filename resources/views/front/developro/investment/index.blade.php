@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', '$page->title')
@section('seo_title','$page->meta_title')
@section('seo_description', '$page->meta_description')
@section('seo_robots', '$page->meta_robots')

@section('content')
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-gap-4">
                @foreach($current_investment as $p)
                <div class="col">
                    <div class="invest-card position-relative">
                        <a href="{{ route('developro.show', $p->slug) }}" class="stretched-link z-2"></a>
                        <div class="position-absolute invest-card-bg-overlay w-100 h-100 top-0 start-0">
                            <img src="{{asset('investment/thumbs/'.$p->file_thumb) }}" alt="" class="w-100 h-100 object-fit-cover invest-card-bg">
                        </div>
                        <div class="d-flex isolation-isolate justify-content-between gap-3 text-white">
                            <div class="fw-bold">
                                <p class="small text-uppercase mb-3 lh-1">{{$p->city->name}}</p>
                                <p class="h3 lh-1">{{$p->name}}</p>

                            </div>
                            @if($p->file_logo)
                            <div>
                                <img src="{{asset('investment/logo/'.$p->file_logo) }}" alt="" class="rounded-circle invest-card-logo img-fluid" loading="lazy" decoding="async" width="71" height="71">
                            </div>
                            @endif
                        </div>
                        <div class="isolation-isolate text-white fw-semibold mb-auto fs-13">
                            <p class="text-uppercase mb-0">Termin oddania:</p>
                            <p class="mb-0">{{ $p->date_end }}</p>
                            <p class="price mt-3 fs-3 text-primary d-none">999 999zł</p>
                        </div>

                        <div class="position-relative z-2">
                            <a href="{{ route('developro.show', $p->slug) }}" class="btn btn-primary btn-with-icon ">
                                Sprawdź
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
