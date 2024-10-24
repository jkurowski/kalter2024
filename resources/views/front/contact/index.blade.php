@extends('layouts.page')

@section('meta_title', $page->title)
@isset($page->meta_title) @section('seo_title', $page->meta_title) @endisset
@isset($page->meta_description) @section('seo_description', $page->meta_description) @endisset
@section('content')
    <main class="with-bigger-section-spacing">

        @include('layouts.partials.page-header', ['h1' => $page->title, 'desc' => $page->title_text, 'header' => 'img/kontakt_bg.webp'])

        <section class="s1">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Siedziba Firmy
                            </span>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-3 fs-14 justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row text-secondary" data-aos="fade">
                            <div class="col-12">
                                <p class="fs-6 fw-semibold ">
                                    Kalter Nieruchomości Sp. z o.o.
                                </p>
                            </div>

                            <div class="col-12 ">
                                <div class="d-flex gap-3 align-items-start mb-0 mb-md-3">
                                    <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="12.204" height="17.435" viewBox="0 0 12.204 17.435">
                                        <path id="Icon_material-location-on" data-name="Icon material-location-on" d="M13.6,3A6.1,6.1,0,0,0,7.5,9.1c0,4.577,6.1,11.333,6.1,11.333S19.7,13.679,19.7,9.1A6.1,6.1,0,0,0,13.6,3Zm0,8.282A2.179,2.179,0,1,1,15.782,9.1,2.18,2.18,0,0,1,13.6,11.282Z" transform="translate(-7.5 -3)" fill="currentcolor"></path>
                                    </svg>

                                    <p class="mb-0">
                                        15-218 Białystok,<br>ul. Augustowska 8 </p>
                                </div>
                            </div>



                            <div class="col-12 col-sm-6">
                                <p class="mb-0">NIP: 542 325 22 89</p>
                                <p class="mb-0">REGON: 363662501</p>
                                <p>KRS: 0000600417</p>

                            </div>


                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="row row-gap-2 mb-3 mb-md-30 text-secondary">
                            <div class="col-12">
                                <p class="mb-0 ">Centrala i sekretariat</p>
                                <div class="d-flex gap-3 align-items-center mb-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                        <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                    </svg>
                                    <a href="tel:+48 0856629347">
                                        085 662 93 47 </a>
                                </div>

                            </div>
                            <div class="col-12">
                                <p class="mb-0 ">Sprzedaż mieszkań</p>
                                <div class="d-flex gap-3 align-items-center mb-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                        <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                    </svg>
                                    <a href="tel:+48 0856629348">
                                        085 662 93 48 </a>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <p class="mb-0 ">Serwis gwarancyjny</p>
                                <div class="d-flex gap-3 align-items-center mb-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                        <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                    </svg>
                                    <a href="tel:+48 0856629365">
                                        085 662 93 65 </a>
                                </div>

                            </div>
                            <div class="col-12">

                                <div class="d-flex gap-3 align-items-center mb-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="min-width: 18px;" width="17.827" height="12.341" viewBox="0 0 17.827 12.341">
                                        <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                                            <path id="Path_93" data-name="Path 93" d="M21.056,10.34l-4.611,4.7a.083.083,0,0,0,0,.12l3.227,3.437a.556.556,0,0,1,0,.788.559.559,0,0,1-.788,0l-3.214-3.424a.088.088,0,0,0-.124,0l-.784.8a3.45,3.45,0,0,1-2.46,1.037A3.519,3.519,0,0,1,9.79,16.725l-.754-.767a.088.088,0,0,0-.124,0L5.7,19.382a.559.559,0,0,1-.788,0,.556.556,0,0,1,0-.788l3.227-3.437a.091.091,0,0,0,0-.12l-4.615-4.7a.084.084,0,0,0-.146.06v9.4a1.375,1.375,0,0,0,1.371,1.371H19.83A1.375,1.375,0,0,0,21.2,19.8V10.4A.086.086,0,0,0,21.056,10.34Z" transform="translate(0 -0.952)" fill="currentcolor"></path>
                                            <path id="Path_94" data-name="Path 94" d="M12.621,15.721a2.33,2.33,0,0,0,1.676-.7L21.02,8.175a1.347,1.347,0,0,0-.848-.3H5.074a1.338,1.338,0,0,0-.848.3l6.724,6.844A2.33,2.33,0,0,0,12.621,15.721Z" transform="translate(-0.332)" fill="currentcolor"></path>
                                        </g>
                                    </svg>

                                    <a href="mailto:bialystok@kalternieruchomosci.pl" style="word-break: break-all;">
                                        bialystok@kalternieruchomosci.pl </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="w-100 h-100" data-aos="fade">
                            <img class="img-fluid rounded" src="{{ asset('img/contact-image-1.webp') }}" alt="" width="600" height="635" loading="eager">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-secondary">
                        <p class="">W sprawie oferty sprzedaży mieszkań
                            „Słonimska Residence” zapraszamy na spotkanie
                            po wcześniejszym umówieniu się telefonicznym
                            lub e-mail.</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-stretch row-gap-4 fs-14">
                    @foreach($cities as $city)
                    <div class="col-12 col-lg-6">
                        <div class="contact-card-shadow">
                            <div class="row ">
                                <div class="col-12 col-md-8">
                                    <div class="p-3 px-md-30 py-md-40 text-secondary">
                                        <div class="fs-24 fw-bold mb-3 mb-md-30">{!! $city->contact_title !!}</div>
                                        {!! $city->contact_text !!}
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="ratio ratio-1x1 h-100">
                                        <div id="map{{$city->id}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center section-header text-secondary">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet_secondary.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200">
                                Poszukujemy
                            </span>
                                <span class="fw-900 fs-4 d-block text-center " data-aos="fade-up" data-aos-delay="400">
                                gruntów
                            </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mt-md-5 align-items-center gy-3">
                    <div class="col-12 col-md-6">
                        <p>W związku z dynamicznym rozwojem naszej firmy w segmencie deweloperskim, zainteresowani jesteśmy zakupem gruntów inwestycyjnych na terenie Warszawy i Białegostoku, jak również
                            w bezpośredniej okolicy tych miast.</p>

                        <p>Szczególną uwagę zwracamy na grunty z przeznaczeniem pod zabudowę wielorodzinną - bloki oraz zabudowę jednorodzinną - szeregową i bliźniaczą</p>

                        <p>Równie interesujace byłyby tereny pod działalność usługowo-handlową oraz z zabudowanymi terenami inwestycyjnymi np. kamienica, budynek
                            do odbudowy.</p>

                        <p>Zainteresowanych prosimy o kontakt:</p>
                        <div class="row text-secondary">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex gap-3 align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.636" height="15.636" viewBox="0 0 15.636 15.636">
                                        <path id="Icon_awesome-phone" data-name="Icon awesome-phone" d="M15.067.751,11.891.018a.738.738,0,0,0-.84.424L9.586,3.863a.731.731,0,0,0,.211.855l1.851,1.515a11.318,11.318,0,0,1-5.411,5.411L4.721,9.793a.732.732,0,0,0-.855-.211L.445,11.049a.742.742,0,0,0-.428.843l.733,3.176a.733.733,0,0,0,.715.568,14.168,14.168,0,0,0,14.17-14.17A.732.732,0,0,0,15.067.751Z" transform="translate(15.635 0) rotate(90)" fill="currentcolor"></path>
                                    </svg>
                                    <a href="tel:+48 604 492 544">
                                        604 492 544 </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="d-flex gap-3 align-items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="min-width: 18px;" width="17.827" height="12.341" viewBox="0 0 17.827 12.341">
                                        <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                                            <path id="Path_93" data-name="Path 93" d="M21.056,10.34l-4.611,4.7a.083.083,0,0,0,0,.12l3.227,3.437a.556.556,0,0,1,0,.788.559.559,0,0,1-.788,0l-3.214-3.424a.088.088,0,0,0-.124,0l-.784.8a3.45,3.45,0,0,1-2.46,1.037A3.519,3.519,0,0,1,9.79,16.725l-.754-.767a.088.088,0,0,0-.124,0L5.7,19.382a.559.559,0,0,1-.788,0,.556.556,0,0,1,0-.788l3.227-3.437a.091.091,0,0,0,0-.12l-4.615-4.7a.084.084,0,0,0-.146.06v9.4a1.375,1.375,0,0,0,1.371,1.371H19.83A1.375,1.375,0,0,0,21.2,19.8V10.4A.086.086,0,0,0,21.056,10.34Z" transform="translate(0 -0.952)" fill="currentcolor"></path>
                                            <path id="Path_94" data-name="Path 94" d="M12.621,15.721a2.33,2.33,0,0,0,1.676-.7L21.02,8.175a1.347,1.347,0,0,0-.848-.3H5.074a1.338,1.338,0,0,0-.848.3l6.724,6.844A2.33,2.33,0,0,0,12.621,15.721Z" transform="translate(-0.332)" fill="currentcolor"></path>
                                        </g>
                                    </svg>

                                    <a href="mailto:grunty@kalter.pl">
                                        grunty@kalter.pl </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-fluid rounded" src="{{ asset('img/kalter_grunty.webp') }}" alt="" width="600" height="635" loading="lazy" decoding="async" fetchPriority="low">

                    </div>
                </div>
            </div>
        </section>



        <section class="position-relative cta">
            <img src="{{ asset('img/cta_bg.webp') }}" alt="Tło call to action" width="1920" height="1080" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" loading="lazy" decoding="async">
            <div class="container z-2">
                <div class="row">
                    <div class="col-12 text-white mb-5 pb-4">

                        <div style="--translate-x: 0;" class="position-relative text-center d-flex flex-column justify-content-center align-items-center ">
                            <div class="position-absolute top-50 start-50 translate-middle z-2">
                                <img src="{{ asset('img/sygnet.svg') }}" alt="" width="168" height="168" loading="lazy" decoding="async" data-aos="fade" class="aos-init aos-animate">
                            </div>
                            <h2 class="fw-bold text-center text-uppercase">
                            <span data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                                Zapytaj
                            </span>
                                <span class="fw-900 fs-4 d-block text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                o lokal
                            </span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-gap-4">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                        <div class="contact-form-container text-secondary">
                            <div class="position-absolute cta-person z-2">
                                <img class="img-fluid" src="{{ asset('img/cta_person.webp') }}" alt="" width="475" height="710" loading="lazy" decoding="async">
                            </div>
                            <p class="fs-5 text-uppercase fw-semibold text-secondary">FORMULARZ KONTAKTOWY</p>

                            <form id="contact-form" autocomplete="off" class="contact-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="form-errors" class="alert-danger alert hide-empty"></div>
                                        <div id="form-success" class="alert-success alert hide-empty"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="user-name" placeholder="Imię i nazwisko" name="username">
                                            <label for="user-name">Imię i nazwisko</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-floating mb-2">
                                            <input type="email" class="form-control" id="user-email" placeholder="E-mail" name="email" required="">
                                            <label for="user-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-floating mb-2">
                                            <input type="tel" class="form-control" id="user-tel" placeholder="Telefon" name="tel">
                                            <label for="user-tel">Telefon</label>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Wiadomość" id="user-message" style="height: 100px" name="message"></textarea>
                                            <label for="user-message">Wiadomość</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">

                                    <div class="form-check text-start pt-2 pb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="terms-check2" name="terms2">
                                        <label class="form-check-label fs-10 fs-8 fs-md-10" for="terms-check2">
                                            Wyrażam zgodę na przetwarzanie danych osobowych zgodnie z ustawą o ochronie
                                            danych osobowych w związku z wysłaniem zapytania przez formularz kontaktowy.
                                            Podanie danych jest dobrowolne, ale niezbędne do przetworzenia zapytania.
                                            Administratorem danych jest KALTER NIERUCHOMOŚCI SP. z o.o. 15-218 Białystok,
                                            ul. Augustowska 8.
                                        </label>
                                    </div>
                                    <div class="form-check text-start">
                                        <input class="form-check-input" type="checkbox" value="" id="terms-check" name="terms">
                                        <label class="form-check-label fs-10 fs-8 fs-md-10" for="terms-check">
                                            Oświadczam, iż zapoznałem się z treścią <a class="link-hover-primary text-decoration-underline" href='/polityka-prywatnosci.php'>Polityką prywatności *</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center text-md-start pt-md-3">
                                    <button data-btn-submit="" type="submit" class="btn btn-primary btn-with-icon " disabled="">
                                        Wyślij
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062">
                                            <path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor" />
                                        </svg>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
@push('scripts')
    <script defer src="{{ asset('js/leaflet.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" onload="this.media='all'" media="print" />
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {
            const mapData = [{
                id: "map1",
                center: [51.76257784135881, 19.4686501834008],
                popupText: "Biuro Sprzedaży Łódź"
            },
                {
                    id: "map2",
                    center: [52.231062467027925, 20.989080484052327],
                    popupText: "Biuro Sprzedaży Warszawa"
                },
                {
                    id: "map3",
                    center: [53.12408961877622, 23.17818596758672],
                    popupText: "Biuro Sprzedaży Białystok"
                },
                {
                    id: 'map4',
                    center: [52.28251491554414, 21.12952375814099],
                    popupText: 'Biuro Sprzedaży Ząbki'
                }
            ];

            const createMap = ({
                                   id,
                                   center,
                                   popupText
                               }) => {
                const map = L.map(id, {
                    center,
                    zoom: 13,
                    zoomControl: false,
                    attributionControl: false
                });

                L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                L.marker(center, {
                    icon: L.icon({
                        iconUrl: '{{ asset('img/marker.svg') }}',
                        iconSize: [55, 88],
                        iconAnchor: [28, 94],
                        popupAnchor: [0, -88]
                    })
                }).addTo(map).bindPopup(`<p class="fw-bold text-secondary fs-10">${popupText}</p>`);
            };

            mapData.forEach(createMap);
        });
    </script>
@endpush
