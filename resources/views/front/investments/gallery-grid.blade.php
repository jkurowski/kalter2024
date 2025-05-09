@props([
    'title' => 'Galeria',
    'subtitle' => 'zdjęć',
    'only_slider' => false,
    'images' => [],
])
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 pb-5">
                <div class="position-relative text-center d-flex flex-column justify-content-center align-items-center text-secondary">
                    <div class="position-absolute top-50 start-50 translate-middle z-2">
                        <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168">
                    </div>
                    <h2 class="fw-bold text-center text-uppercase">
                        @if ($title)
                            <span data-aos="fade-up"
                                  data-aos-delay="200">
                                {{ $title }}</span>
                        @endif
                        @if ($subtitle)
                            <span class="fw-900 fs-4 d-block text-center"
                                  data-aos="fade-up"
                                  data-aos-delay="400">
                                {{ $subtitle }}</span>
                        @endif
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div id="photos-list" class="container">
        <div class="row justify-content-center pt-4">
            @foreach ($images as $image)
                <div class="col-6 col-md-4 col-xl-3 p-0">
                    <div class="col-gallery-thumb m-2">
                        <a href="{{ $image['url'] }}" class="glightbox" rel="gallery-1" title="">
                            <img loading="eager" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="img-fluid">
                            <div><i class="las la-search-plus"></i></div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
