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
                            Kontakt
                        </span>
                        <span class="fw-900 fs-4 d-block text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            Inwestycje
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