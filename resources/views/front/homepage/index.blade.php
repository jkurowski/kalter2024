@extends('layouts.homepage', ['body_class' => 'homepage'])

@section('content')
    <?php
    // Zmienne do slidera
    $arrow_prev = '<button  class="slick-prev slick-arrow" aria-label="Previous" type="button">
            
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.05" height="16.484" viewBox="0 0 9.05 16.484">
                        <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M363.434-675.758,356-683.192l.808-.808,8.242,8.242-8.242,8.242-.808-.808Z" transform="translate(365.05 -667.516) rotate(180)" fill="#fff"/>
                      </svg>
            
                    </button>';
    
    $arrow_next = '<button  class="slick-next slick-arrow" aria-label="Next" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.05" height="16.484" viewBox="0 0 9.05 16.484">
            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M363.434-675.758,356-683.192l.808-.808,8.242,8.242-8.242,8.242-.808-.808Z" transform="translate(-356 684)" fill="#fff"/>
            </svg>
            
                </button>'; ?>


    <section class="pb-0 home-hero position-relative">
        <?php
        $hero_slider_options = [
            'autoplaySpeed' => 5000,
            'prevArrow' => $arrow_prev,
            'nextArrow' => $arrow_next,
            'responsive' => [
                [
                    'breakpoint' => 575,
                    'settings' => [
                        'autoplay' => true,
                        'centerMode' => false,
                    ],
                ],
                [
                    'breakpoint' => 3840,
                    'settings' => [
                        'autoplay' => true,
                        'centerMode' => true,
                        'centerPadding' => 'max(50px,calc(130 / 1920 * 100vw))',
                    ],
                ],
            ],
        ];
        $hero_slides = [
            [
                'title' => 'Na Skraju',
                'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.',
                'button_text' => 'Sprawdź',
                'button_url' => '#',
                'image_url' => '/img/home_hero_1.webp',
            ],
            [
                'title' => 'Na Skraju',
                'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.',
                'button_text' => 'Sprawdź',
                'button_url' => '#',
                'image_url' => '/img/home_hero_1.webp',
            ],
            [
                'title' => 'Na Skraju',
                'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.',
                'button_text' => 'Sprawdź',
                'button_url' => '#',
                'image_url' => '/img/home_hero_1.webp',
            ],
        ]; ?>


        <div data-slick='<?= json_encode($hero_slider_options) ?>' class="hero-slider">
            <?php foreach ($hero_slides as $index => $row) : ?>
            <div class="hero-slide position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100 hero-slide-image-container">
                    <img src="<?= $row['image_url'] ?>" alt="" class="hero-slide-image w-100 h-100 object-fit-cover"
                        loading="eager" width="1655" height="680">
                </div>
                <div class="hero-slide-content isolation-isolate text-white text-center d-flex align-items-center">
                    <div class="col-8 offset-2 col-xxl-4  offset-xxl-4 ">
                        <?php if (!$index) : ?>
                        <h1 class="hero-slide-title"><?= $row['title'] ?></h1>
                        <?php else : ?>
                        <h2 class="h1 hero-slide-title"><?= $row['title'] ?></h2>
                        <?php endif; ?>
                        <p class="text-pretty lh-150 hero-slide-text">
                            <?= $row['description'] ?>
                        </p>
                        <div class="mt-30 hero-slide-button">
                            <a href="<?= $row['button_url'] ?>" class="btn btn-primary btn-with-icon">
                                <?= $row['button_text'] ?>
                                <svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                    viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                        d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                        transform="translate(-356 684)" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </section>

    @include('layouts.partials.homesearch')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3 col-xl-4 offset-xl-4">
                    <div style="--translate-x: 0;"
                        class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                        <div class="position-absolute top-50 start-50 translate-middle z-2">
                            <img src="img/sygnet_secondary.svg" alt="" width="168" height="168" loading="lazy"
                                decoding="async" data-aos="fade">
                        </div>
                        <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Dostępne
                            </span>
                            <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                Inwestycje
                            </span>
                        </h2>
                    </div>
                    <div class="pt-4 mt-3 text-center text-pretty" data-aos="fade">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor

                        </p>

                    </div>
                </div>
            </div>
        </div>
        <?php
        $slider_options = [
            'prevArrow' => $arrow_prev,
            'nextArrow' => $arrow_next,
            'mobileFirst' => true,
            'centerMode' => false,
            'slidesToShow' => 1,
            'responsive' => [
                [
                    'breakpoint' => 576,
                    'settings' => [
                        'slidesToShow' => 2,
                    ],
                ],
                [
                    'breakpoint' => 992,
                    'settings' => [
                        'slidesToShow' => 3,
                    ],
                ],
                [
                    'breakpoint' => 1400,
                    'settings' => [
                        'centerMode' => true,
                        'centerPadding' => '20%',
                        'slidesToShow' => 3,
                    ],
                ],
            ],
        ];
        ?>
        <div class="invests-vertical-slider mt-4" data-slick='<?= json_encode($slider_options) ?>'>
            @foreach ($current_investment as $p)
                <div>
                    <div class="invest-card position-relative">
                        <a href="{{ route('developro.show', $p->slug) }}" class="stretched-link z-2"></a>
                        <div class="position-absolute invest-card-bg-overlay w-100 h-100 top-0 start-0">
                            <img src="{{ asset('investment/thumbs/' . $p->file_thumb) }}" alt=""
                                class="w-100 h-100 object-fit-cover invest-card-bg">
                        </div>
                        <div class="d-flex isolation-isolate justify-content-between gap-3 text-white">
                            <div class="fw-bold">
                                <p class="small text-uppercase mb-3 lh-1">{{ $p->city->name }}</p>
                                <p class="h3 lh-1">{{ $p->name }}</p>

                            </div>
                            @if ($p->file_logo)
                                <div>
                                    <img src="{{ asset('investment/logo/' . $p->file_logo) }}" alt=""
                                        class="rounded-circle invest-card-logo img-fluid" loading="lazy" decoding="async"
                                        width="71" height="71">
                                </div>
                            @endif
                        </div>
                        <div class="isolation-isolate text-white fw-semibold mb-auto fs-13">
                            <p class="text-uppercase mb-0">Termin oddania:</p>
                            <p class="mb-0">{{ $p->date_end }}</p>
                            <p class="price mt-3 fs-6 text-primary">
                                Ceny już od:
                                <span>
                                    999 999zł
                                </span>
                            </p>
                        </div>

                        <div class="position-relative z-2">
                            <a href="{{ route('developro.show', $p->slug) }}" class="btn btn-primary btn-with-icon ">
                                Sprawdź
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                    viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                        d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                        transform="translate(-356 684)" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div style="--translate-x: 0;"
                        class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                        <div class="position-absolute top-50 start-50 translate-middle z-2">
                            <img src="img/sygnet_secondary.svg" alt="" width="168" height="168" loading="lazy"
                                decoding="async" data-aos="fade">
                        </div>
                        <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Aktualne
                            </span>
                            <span class="fw-900 fs-4 d-block text-center text-primary text-shadow" data-aos="fade-up"
                                data-aos-delay="400">
                                Promocje
                            </span>
                        </h2>
                    </div>
                    <div class="pt-4 mt-3 text-center" data-aos="fade">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor

                        </p>

                    </div>
                </div>
            </div>
        </div>

        <?php
        $slider_options = [
            'arrows' => false,
            'mobileFirst' => true,
            'centerMode' => true,
            'slidesToShow' => 1,
            'centerPadding' => '15px',
            'responsive' => [
                [
                    'breakpoint' => 576,
                    'settings' => [
                        'centerPadding' => '10%',
                    ],
                ],
                [
                    'breakpoint' => 768,
                    'settings' => [
                        'centerPadding' => '15%',
                    ],
                ],
                [
                    'breakpoint' => 1199,
                    'settings' => [
                        'centerPadding' => 'calc(505 / 1920 * 100vw)',
                    ],
                ],
            ],
        ];
        ?>
        <div class="invests-horizontal-slider mt-4" data-slick='<?= json_encode($slider_options) ?>'>
            <div>
                <div
                    class="invest-card-horizontal position-relative d-flex flex-column-reverse flex-sm-row justify-content-between  bg-white">
                    <a href="#" class="stretched-link"></a>
                    <div class="text-secondary invest-card-horizontal-left flex-fill">
                        <p class="h3 mb-0">
                            Mieszkanie A/3
                        </p>
                        <p class="fs-10 text-uppercase fw-900 mb-2">
                            Na falistej
                        </p>
                        <p class="h3 mb-1">
                            <span class="me-2">
                                611 000 Zł
                            </span>
                            <span class="text-body-emphasis opacity-50 fs-6 align-middle text-decoration-line-through">
                                640 000 Zł
                            </span>
                        </p>
                        <p class="fs-8 text-black">
                            Najniższa cena z ostatnich 30 dni:....
                        </p>
                        <div class="small mb-40">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="td-with-icon"><img src="img/tile.svg" alt="" loading="lazy"
                                                decoding="async" class="w-10 h-10 object-fit-contain" width="12"
                                                height="12"></td>
                                        <td>Piętro</td>
                                        <td class="text-end">Parter</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon"><img src="img/blueprint.svg" alt=""
                                                loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain"
                                                width="12" height="12"></td>
                                        <td>Metraż</td>
                                        <td class="text-end">83,78 m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon"><img src="img/rooms.svg" alt="" loading="lazy"
                                                decoding="async" class="w-10 h-10 object-fit-contain" width="12"
                                                height="12"></td>
                                        <td>Liczba Pokoi</td>
                                        <td class="text-end">4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="position-relatieve z-2">
                            <a class="btn btn-primary btn-with-icon " href="#">
                                Sprawdź
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                    viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                        d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                        transform="translate(-356 684)" fill="currentColor" />
                                </svg>

                            </a>
                        </div>
                    </div>

                    <div class="invest-card-horizontal-right">
                        <img src="img/investment_plan.png" alt="" loading="lazy" decoding="async"
                            class="w-100 h-100 object-fit-contain" width="440" height="310">
                    </div>

                </div>
            </div>
            <div>
                <div
                    class="invest-card-horizontal position-relative d-flex flex-column-reverse flex-sm-row justify-content-between  bg-white">
                    <a href="#" class="stretched-link"></a>
                    <div class="text-secondary invest-card-horizontal-left flex-fill">
                        <p class="h3 mb-0">
                            Mieszkanie A/3
                        </p>
                        <p class="fs-10 text-uppercase fw-900 mb-2">
                            Na falistej
                        </p>
                        <p class="h3 mb-1">
                            <span class="me-2">
                                611 000 Zł
                            </span>
                            <span class="text-body-emphasis opacity-50 fs-6 align-middle text-decoration-line-through">
                                640 000 Zł
                            </span>
                        </p>
                        <p class="fs-8 text-black">
                            Najniższa cena z ostatnich 30 dni:....
                        </p>
                        <div class="small mb-40">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="td-with-icon"><img src="img/tile.svg" alt="" loading="lazy"
                                                decoding="async" class="w-10 h-10 object-fit-contain" width="12"
                                                height="12"></td>
                                        <td>Piętro</td>
                                        <td class="text-end">Parter</td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon"><img src="img/blueprint.svg" alt=""
                                                loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain"
                                                width="12" height="12"></td>
                                        <td>Metraż</td>
                                        <td class="text-end">83,78 m<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td class="td-with-icon"><img src="img/rooms.svg" alt="" loading="lazy"
                                                decoding="async" class="w-10 h-10 object-fit-contain" width="12"
                                                height="12"></td>
                                        <td>Liczba Pokoi</td>
                                        <td class="text-end">4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="position-relatieve z-2">
                            <a class="btn btn-primary btn-with-icon " href="#">
                                Sprawdź
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062"
                                    viewBox="0 0 6.073 11.062">
                                    <path id="chevron_right_FILL0_wght100_GRAD0_opsz24"
                                        d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z"
                                        transform="translate(-356 684)" fill="currentColor" />
                                </svg>

                            </a>
                        </div>
                    </div>

                    <div class="invest-card-horizontal-right">
                        <img src="img/investment_plan.png" alt="" loading="lazy" decoding="async"
                            class="w-100 h-100 object-fit-contain" width="440" height="310">
                    </div>

                </div>
            </div>
        </div>
    </section>




    <section class="home-about">
        <div class="container">
            <div class="row row-gap-50 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="row row-gap-4">
                        <div class="col-12 col-md-6 text-center order-last order-md-first">
                            <img src="img/home_o_firmie.webp" alt="" width="321" height="471"
                                loading="lazy" decoding="async" data-aos="fade" class="img-fluid rounded">
                        </div>

                        <div class="col-12 col-md-6">
                            <div style="--translate-x: -3%;"
                                class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                                <div class="position-absolute top-50 start-50 translate-middle z-2">
                                    <img src="img/sygnet_secondary.svg" alt="" width="168" height="168"
                                        loading="lazy" decoding="async" data-aos="fade">
                                </div>
                                <h2 class="fw-bold text-center text-uppercase">
                                    <span data-aos="fade-up" data-aos-delay="200">
                                        Grupa Kalter
                                    </span>
                                    <span class="fw-900 fs-4 d-block text-center" data-aos="fade-up"
                                        data-aos-delay="400">
                                        O firmie
                                    </span>
                                </h2>
                            </div>
                            <div class="pt-4 mt-3" data-aos="fade">
                                <p>
                                    Kalter Nieruchmości to spółka Grupy Kalter utworzona w celu przygotowania, realizacji i
                                    sprzedaży własnych inwestycji deweloperskich. Bazujemy na wieloletnim doświadczeniu
                                    Kalter Sp. z o.o., uznanego na rynku wykonawcy inwestycji kubaturowych.
                                </p>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <?php $items = [
                        [
                            'title' => 'Doświadczenie budowlane',
                            'description' => 'Spółka Kalter działa od przeszło 20 lat na rynku i zrealizowała już przeszło 138 inwestycji.',
                            'svg_url' => 'img/construction.svg',
                        ],
                        [
                            'title' => 'Innowacyjność',
                            'description' => 'Inwestujemy w nowe technologie i systemy informatyczne wspierające sprawne zarządzanie i realizacje prac.',
                            'svg_url' => 'img/graphic-design.svg',
                        ],
                        [
                            'title' => 'Wysoka jakość usług',
                            'description' => 'Jest potwierdzona szeregiem referencji od naszych Inwestorów i pozytywnych opinii naszych klientów. ',
                            'svg_url' => 'img/services-quality.svg',
                        ],
                        [
                            'title' => 'Profesjonalna realizacja',
                            'description' => 'Nasz sukces tworzy zespół pracowników, który pozwala nam profesjonalnie budować inwestycje, relacje i przyszłość.',
                            'svg_url' => 'img/realisation.svg',
                        ],
                    ]; ?>
                    <div class="row row-gap-4 pt-40 mt-lg-4">
                        <?php foreach ($items as $item) : ?>
                        <div class="col-12 col-sm-6">
                            <div class="d-flex flex-column align-items-center text-center text-lg-start align-items-lg-start row-gap-4"
                                data-aos="fade">
                                <div class="d-inline-flex rounded-circle bg-white p-2 justify-content-center align-items-center shadow"
                                    style="width: 87px; height: 87px; --bs-box-shadow:0 3px 30px rgba(0, 0, 0, 0.1);">
                                    <img src="<?php echo $item['svg_url']; ?>" alt="" width="45" height="45"
                                        loading="lazy" decoding="async">
                                </div>
                                <p class="text-secondary fs-5 fw-semibold mb-0" data-aos="fade">
                                    <?php echo $item['title']; ?>
                                </p>
                                <p data-aos="fade">
                                    <?php echo $item['description']; ?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
