<?php
$offices = [
    [
        'name' => 'Biuro Białystok',
        'address' => '15-218 Białystok,<br>ul. Augustowska 8',
        'tel' => '85 662 93 48',
        'email' => 'bialystok@kalternieruchomosci.pl',
    ],
    [
        'name' => 'Biuro Warszawa',
        'address' => '00-834 Warszawa,<br>ul. Pańska 98 lokal 106',
        'tel' => '22 509 72 72',
        'email' => 'warszawa@kalternieruchomosci.pl',
    ],
    [
        'name' => 'Biuro Łódź',
        'address' => '90-019 Łódź,<br>ul. Dowborczyków 25 lok. C2',
        'tel' => '532 821 111',
        'email' => 'lodz@kalternieruchomosci.pl',
    ],
    [
        'name' => 'Biuro Ząbki',
        'address' => '05-091 Ząbki,<br>ul. Andersena 13',
        'tel' => '666 347 990',
        'email' => 'andersena@kalternieruchomosci.pl',
    ],
]; ?>


<footer class="page-footer fs-14">
    <div class="container">

        <div class="row row-gap-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-4 col-5">
                    <a href="/">
                        <img src="{{ asset('img/logo.svg') }}" alt="Logo" width="262" height="87"
                            class="img-fluid footer-logo" loading="lazy" decoding="async">
                    </a>
                </div>
                <p class="text-balance">
                    Gwarantujemy wysoką jakość świadczonych usług, zapewniamy profesjonalną, stałą współpracę z klientem
                    oraz pewność, że powierzone nam zadania znajdują się w rękach fachowców.
                </p>
                <p>
                    <a class="small link-body-primary text-decoration-underline" href="/polityka-prywatnosci">Polityka
                        prywatności*</a>
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <p class="text-uppercase text-secondary mb-md-4 fw-semibold fs-6">Oferta</p>
                <ul class="list-unstyled">

                    @foreach ($current_investment as $p)
                        <li class='mb-2'>
                            <a class='text-uppercase' href="{{ route('developro.show', $p->slug) }}">{{ $p->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <p class="text-uppercase text-secondary mb-md-4 fw-semibold  fs-6">O firmie</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/inwestycje-zrealizowane.php">Inwestycje<br>Zrealizowane</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('menu.show', ['uri' => 'deweloper']) }}">Deweloper</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('menu.show', ['uri' => 'kariera']) }}">Kariera</a>
                    </li>
                    <li class="mb-2">
                        <a href="https://www.kalter.pl/o-nas" target="_blank">Grupa Kalter</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <p class="text-uppercase text-secondary mb-md-4 fw-semibold  fs-6">Dla klienta</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('menu.show', ['uri' => 'kredyty']) }}">Kredyty</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('menu.show', ['uri' => 'programy-wykonczeniowe-warszawa']) }}">Programy wykończeniowe</a>
                    </li>
                </ul>
            </div>

        </div>

        <hr class="footer-hr">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 row-gap-3">
            <?php foreach ($cities as $city) : ?>
            @if ($city->footer)
                <div class="col-auto">
                    {!! $city->footer !!}
                </div>
            @endif
            <?php endforeach; ?>
        </div>
    </div>
</footer>

@push('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
@endpush
