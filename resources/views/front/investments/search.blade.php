<section class="oferta-search search section-search">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <form action=""
                    class="bg-secondary text-white rounded d-flex row-gap-0 flex-wrap flex-sm-nowrap search-form"
                    autocomplete="off">
                    <div class="row row-gap-3 align-items-end px-30 py-3 pb-30">
                        <p class="col-12 text-uppercase mb-0">Wyszukiwarka</p>
                        <div class="col-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-5 align-items-end">
                                <div class="col">
                                    <select name="step" id="step" class="form-select">
                                        <option value="0" selected>Etap</option>
                                        <option value="1">I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="city" id="city" class="form-select">
                                        <option value="0" selected>Miasto</option>
                                        <option value="Warszawa">Warszawa</option>
                                        <option value="Krakow">Krakow</option>
                                        <option value="Wroclaw">Wroclaw</option>
                                        <option value="Poznan">Poznan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="rooms" id="rooms" class="form-select">
                                        <option value="0" selected>Pokoje</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="area_from" id="area_from"
                                            class="form-control bg-transparent" placeholder="Powierzchnia od">
                                        <label for="area_from">Powierzchnia od</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="area_to" id="area_to"
                                            class="form-control bg-transparent" placeholder="Powierzchnia do">
                                        <label for="area_to">Powierzchnia do</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <select name="invest" id="invest" class="form-select">
                                        <option value="0" selected>Inwestycja</option>
                                        <option value="1">Na skraju</option>
                                        <option value="2">Słonimska Residence</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="status" id="status" class="form-select">
                                        <option value="0" selected>Status</option>
                                        <option value="1">Dostępny</option>
                                        <option value="2">Niedostępny</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="kitchen" id="kitchen" class="form-select">
                                        <option value="0" selected>Aneks/Kuchnia</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="garden" id="garden" class="form-select">
                                        <option value="0" selected>Ogródek</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="terrace" id="terrace" class="form-select">
                                        <option value="0" selected>Taras</option>
                                        <option value="1">Tak</option>
                                        <option value="2">Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="apartment" id="apartment" class="form-select">
                                        <option value="0" selected>Lokal Mieszkalny</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="flex-fill">
                        <button type="submit"
                            class="btn btn-primary w-100 h-100 fs-14 text-uppercase px-sm-4 d-flex align-items-center justify-content-center flex-sm-column gap-2 gap-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.631" height="21.636"
                                viewBox="0 0 21.631 21.636">
                                <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search"
                                    d="M25.877,24.563l-6.016-6.072a8.573,8.573,0,1,0-1.3,1.318l5.977,6.033a.926.926,0,0,0,1.307.034A.932.932,0,0,0,25.877,24.563ZM13.124,19.882A6.77,6.77,0,1,1,17.912,17.9,6.728,6.728,0,0,1,13.124,19.882Z"
                                    transform="translate(-4.5 -4.493)" fill="#fff" />
                            </svg>
                            <span>
                                Szukaj
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
