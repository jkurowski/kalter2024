@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title',$page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <main class="with-bigger-section-spacing page-{{ $uri }}">

        @include('layouts.partials.page-header', ['h1' => $page->title, 'desc' => $page->title_text,  'header' => 'img/kredyty_bg.webp'])

        <section class="s1">
            <div class="container">
                <div class="row row-gap-4 align-items-center">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Finamax
                            </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                BO LICZY SIĘ KAŻDY PROCENT
                            </span>
                            </h2>
                        </div>
                        <div class="text-pretty mt-4 mt-md-40" data-aos="fade">
                            <p>
                                Eksperci Finamax bezpłatnie dokonają dla Państwa analizy ofert w większości banków obecnych na rynku i przedstawią najkorzystniejsze rozwiązania w zakresie kredytów na zakup wymarzonego lokalu.
                            </p>
                            <p>
                                Stworzyliśmy taki zespół i ciągle dbamy o jego rozwój poprzez różnego rodzaju szkolenia grupowe i indywidualne. Dbamy też o podtrzymywanie dobrych, nie tylko zawodowych więzi organizując spotkania i wyjazdy integracyjne.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 offset-lg-2">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('/img/kredyty_s1.webp') }}" alt="" width="555" height="471" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s2">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-12 col-md-6 col-lg-5 order-last order-md-0">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('/img/kredyty_s2.webp') }}" alt="" width="555" height="555" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="text-pretty" data-aos="fade">
                            <p>
                                Finamax jest niezależną firmą pośrednictwa kredytowego.
                            </p>
                            <p>
                                Specjalizuje się w wyszukiwaniu optymalnych rozwiązań dla klientów zainteresowanych uzyskaniem kredytu hipotecznego.
                            </p>
                            <p class="fs-5 text-secondary fw-semibold pt-3">Oto działania, które państwu zapewniamy:</p>
                            <ul>
                                <li class="mb-2">spotykamy się w miejscu i czasie, dogodnym dla Państwa,</li>
                                <li class="mb-2">przedstawiamy Państwu najlepsze oferty na rynku,</li>
                                <li class="mb-2">wyjaśniamy zalety i wady poszczególnych ofert,</li>
                                <li class="mb-2">pomagamy Państwu w wyborze najkorzystniejszego rozwiązania,</li>
                                <li class="mb-2">pomagamy klientom w wypełnieniu formularzy bankowych,</li>
                                <li class="mb-2">gromadzimy dla Państwa pełną dokumentację inwestycji,</li>
                                <li class="mb-2">zapewniamy Państwu naszą obecność i wsparcie przy podpisaniu umowy z wybranym bankiem,</li>
                                <li class="mb-2">zapewniamy opiekę i poradę także po wypłacie kredytu,</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s3">
            <div class="container">
                <div class="row row-gap-4">
                    <div class="col-12 col-md-10 col-xxl-8 offset-md-1 offset-xxl-2">
                        <div class="row row-gap-4">
                            <div class="col-12 col-lg-6 flex-fill">
                                <div class="contact-card-shadow p-3 p-md-30 text-secondary h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <div class="mb-40">
                                            <p class='fs-24 fw-bold'>Warszawa</p>
                                            <p class="fs-4 fw-semibold mb-0">Maciej Wróblewski</p>
                                            <p class="mb-4">Ekspert kredytowy</p>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                                    <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                                </svg>
                                                <a href="tel:+48 604 362 963">
                                                    604 362 963 </a>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.827" height="12.341" viewBox="0 0 17.827 12.341">
                                                    <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                                                        <path id="Path_93" data-name="Path 93" d="M21.056,10.34l-4.611,4.7a.083.083,0,0,0,0,.12l3.227,3.437a.556.556,0,0,1,0,.788.559.559,0,0,1-.788,0l-3.214-3.424a.088.088,0,0,0-.124,0l-.784.8a3.45,3.45,0,0,1-2.46,1.037A3.519,3.519,0,0,1,9.79,16.725l-.754-.767a.088.088,0,0,0-.124,0L5.7,19.382a.559.559,0,0,1-.788,0,.556.556,0,0,1,0-.788l3.227-3.437a.091.091,0,0,0,0-.12l-4.615-4.7a.084.084,0,0,0-.146.06v9.4a1.375,1.375,0,0,0,1.371,1.371H19.83A1.375,1.375,0,0,0,21.2,19.8V10.4A.086.086,0,0,0,21.056,10.34Z" transform="translate(0 -0.952)" fill="currentcolor"></path>
                                                        <path id="Path_94" data-name="Path 94" d="M12.621,15.721a2.33,2.33,0,0,0,1.676-.7L21.02,8.175a1.347,1.347,0,0,0-.848-.3H5.074a1.338,1.338,0,0,0-.848.3l6.724,6.844A2.33,2.33,0,0,0,12.621,15.721Z" transform="translate(-0.332)" fill="currentcolor"></path>
                                                    </g>
                                                </svg>

                                                <a href="mailto:maciej.wroblewski@finamax.pl">
                                                    maciej.wroblewski@finamax.pl </a>
                                            </div>
                                        </div>
                                        <div class="mb-40">
                                            <p class="fs-4 fw-semibold mb-0">Beata Czernicka</p>
                                            <p class="mb-4">Ekspert kredytowy</p>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                                    <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                                </svg>
                                                <a href="tel:+48 660 664 303">
                                                    660 664 303 </a>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.827" height="12.341" viewBox="0 0 17.827 12.341">
                                                    <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                                                        <path id="Path_93" data-name="Path 93" d="M21.056,10.34l-4.611,4.7a.083.083,0,0,0,0,.12l3.227,3.437a.556.556,0,0,1,0,.788.559.559,0,0,1-.788,0l-3.214-3.424a.088.088,0,0,0-.124,0l-.784.8a3.45,3.45,0,0,1-2.46,1.037A3.519,3.519,0,0,1,9.79,16.725l-.754-.767a.088.088,0,0,0-.124,0L5.7,19.382a.559.559,0,0,1-.788,0,.556.556,0,0,1,0-.788l3.227-3.437a.091.091,0,0,0,0-.12l-4.615-4.7a.084.084,0,0,0-.146.06v9.4a1.375,1.375,0,0,0,1.371,1.371H19.83A1.375,1.375,0,0,0,21.2,19.8V10.4A.086.086,0,0,0,21.056,10.34Z" transform="translate(0 -0.952)" fill="currentcolor"></path>
                                                        <path id="Path_94" data-name="Path 94" d="M12.621,15.721a2.33,2.33,0,0,0,1.676-.7L21.02,8.175a1.347,1.347,0,0,0-.848-.3H5.074a1.338,1.338,0,0,0-.848.3l6.724,6.844A2.33,2.33,0,0,0,12.621,15.721Z" transform="translate(-0.332)" fill="currentcolor"></path>
                                                    </g>
                                                </svg>

                                                <a href="mailto:beata.czernicka@finamax.pl">
                                                    beata.czernicka@finamax.pl </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-2">
                                            <p class="fs-4 fw-semibold mb-0">Finamax sp. z o. o.</p>
                                            <p class="mb-0">
                                                Prosta Tower<br>
                                                ul. Prosta 32 piętro 5<br>
                                                00-838 Warszawa
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="row row-gap-4 h-100">
                                    <div class="col-12 flex-fill">
                                        <div class="contact-card-shadow p-3 p-md-30 text-secondary h-100">
                                            <p class='fs-24 fw-bold'>Łódź</p>
                                            <p class=" fs-4 fw-semibold mb-0">Mariusz Ryjak</p>
                                            <p class="mb-4">Ekspert kredytowy</p>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                                    <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                                </svg>
                                                <a href="tel:+48 508 347 833">
                                                    508 347 833 </a>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.827" height="12.341" viewBox="0 0 17.827 12.341">
                                                    <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                                                        <path id="Path_93" data-name="Path 93" d="M21.056,10.34l-4.611,4.7a.083.083,0,0,0,0,.12l3.227,3.437a.556.556,0,0,1,0,.788.559.559,0,0,1-.788,0l-3.214-3.424a.088.088,0,0,0-.124,0l-.784.8a3.45,3.45,0,0,1-2.46,1.037A3.519,3.519,0,0,1,9.79,16.725l-.754-.767a.088.088,0,0,0-.124,0L5.7,19.382a.559.559,0,0,1-.788,0,.556.556,0,0,1,0-.788l3.227-3.437a.091.091,0,0,0,0-.12l-4.615-4.7a.084.084,0,0,0-.146.06v9.4a1.375,1.375,0,0,0,1.371,1.371H19.83A1.375,1.375,0,0,0,21.2,19.8V10.4A.086.086,0,0,0,21.056,10.34Z" transform="translate(0 -0.952)" fill="currentcolor"></path>
                                                        <path id="Path_94" data-name="Path 94" d="M12.621,15.721a2.33,2.33,0,0,0,1.676-.7L21.02,8.175a1.347,1.347,0,0,0-.848-.3H5.074a1.338,1.338,0,0,0-.848.3l6.724,6.844A2.33,2.33,0,0,0,12.621,15.721Z" transform="translate(-0.332)" fill="currentcolor"></path>
                                                    </g>
                                                </svg>

                                                <a href="mailto:mariusz.ryjak@finamax.pl">
                                                    mariusz.ryjak@finamax.pl </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 flex-fill">
                                        <div class="contact-card-shadow p-3 p-md-30 text-secondary h-100">
                                            <p class='fs-24 fw-bold'>Białystok</p>
                                            <p class=" fs-4 fw-semibold mb-0">Marcin Misiejuk</p>
                                            <p class="mb-4">Ekspert kredytowy</p>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                                    <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                                </svg>
                                                <a href="tel:+48 502 629 523">
                                                    502 629 523 </a>
                                            </div>
                                            <div class="d-flex gap-3 align-items-center mb-2 mb-md-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17.827" height="12.341" viewBox="0 0 17.827 12.341">
                                                    <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                                                        <path id="Path_93" data-name="Path 93" d="M21.056,10.34l-4.611,4.7a.083.083,0,0,0,0,.12l3.227,3.437a.556.556,0,0,1,0,.788.559.559,0,0,1-.788,0l-3.214-3.424a.088.088,0,0,0-.124,0l-.784.8a3.45,3.45,0,0,1-2.46,1.037A3.519,3.519,0,0,1,9.79,16.725l-.754-.767a.088.088,0,0,0-.124,0L5.7,19.382a.559.559,0,0,1-.788,0,.556.556,0,0,1,0-.788l3.227-3.437a.091.091,0,0,0,0-.12l-4.615-4.7a.084.084,0,0,0-.146.06v9.4a1.375,1.375,0,0,0,1.371,1.371H19.83A1.375,1.375,0,0,0,21.2,19.8V10.4A.086.086,0,0,0,21.056,10.34Z" transform="translate(0 -0.952)" fill="currentcolor"></path>
                                                        <path id="Path_94" data-name="Path 94" d="M12.621,15.721a2.33,2.33,0,0,0,1.676-.7L21.02,8.175a1.347,1.347,0,0,0-.848-.3H5.074a1.338,1.338,0,0,0-.848.3l6.724,6.844A2.33,2.33,0,0,0,12.621,15.721Z" transform="translate(-0.332)" fill="currentcolor"></path>
                                                    </g>
                                                </svg>

                                                <a href="mailto:marcin.misiejuk@finamax.pl">
                                                    marcin.misiejuk@finamax.pl </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@push('scripts')

@endpush
