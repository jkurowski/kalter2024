<footer class="page-footer fs-14">
    <div class="container">
        <div class="row row-gap-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-4 col-5">
                    <a href="/">
                        <img src="{{ asset('img/logo.svg') }}" alt="Logo" width="262" height="87" class="img-fluid footer-logo" loading="lazy" decoding="async">
                    </a>
                </div>
                <p class="text-balance">Gwarantujemy wysoką jakość świadczonych usług, zapewniamy profesjonalną, stałą współpracę z klientem oraz pewność, że powierzone nam zadania znajdują się w rękach fachowców.</p>
                <p><a class="small link-body-primary text-decoration-underline" href="/polityka-prywatnosci">Polityka prywatności*</a></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <p class="text-uppercase text-secondary mb-md-4 fw-semibold fs-6">Oferta</p>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('developro.index') }}">Lokale mieszkalne</a>
                    </li>
                    <li class="mb-2">
                        <a href="/pl/wyniki-wyszukiwania?type=2">Lokale usługowe</a>
                    </li>
                    <li class="mb-2">
                        <a href="/pl/wyniki-wyszukiwania?city=&rooms=&area=&advanced=6&invest=&status=1&kitchen=&garden=&price=&type=1">Gotowe do odbioru</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <p class="text-uppercase text-secondary mb-md-4 fw-semibold  fs-6">O firmie</p>
                <ul class="list-unstyled">
                    <li class="mb-2 d-none">
                        <a href="{{ route('developro.completed') }}">Inwestycje<br>Zrealizowane</a>
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
                        <a href="{{ route('menu.show', ['uri' => 'programy-wykonczeniowe']) }}">Programy wykończeniowe</a>
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

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
