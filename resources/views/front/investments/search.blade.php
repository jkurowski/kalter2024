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
                                    <select name="city" id="city" class="form-select">
                                        <option value="" selected>Miasto</option>
                                        @foreach($cities as $c)
                                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="rooms" id="rooms" class="form-select">
                                        <option value="" selected>Pokoje</option>
                                        <option value="1" {{ request('rooms') == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ request('rooms') == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ request('rooms') == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ request('rooms') == 4 ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ request('rooms') == 5 ? 'selected' : '' }}>4</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="area" id="area" class="form-select">
                                        <option value="0" selected>Powierzchnia</option>
                                        <option value="1">30-50 m<sup>2</sup></option>
                                        <option value="2">51-70 m<sup>2</sup></option>
                                        <option value="3">71-90 m<sup>2</sup></option>
                                        <option value="4">91-110 m<sup>2</sup></option>
                                        <option value="5">> 110 m<sup>2</sup></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="advanced" id="advanced" class="form-select">
                                        <option value="" selected>Zaawansowanie</option>
                                        <option value="1">Przedsprzedaż</option>
                                        <option value="2">Realizacja 25%</option>
                                        <option value="3">Realizacja 50%</option>
                                        <option value="4">Realizacja 75%</option>
                                        <option value="5">Realizacja 100%</option>
                                        <option value="6">Gotowe do odbioru</option>
                                    </select>
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
                                        <option value="" selected>Status</option>
                                        <option value="1" {{ request('status') == 1 ? 'selected' : '' }}>Dostępny</option>
                                        <option value="2" {{ request('status') == 2 ? 'selected' : '' }}>Rezerwacja</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="kitchen" id="kitchen" class="form-select">
                                        <option value="" selected>Aneks/Kuchnia</option>
                                        <option value="1" {{ request('kitchen') == 1 ? 'selected' : '' }}>Tak</option>
                                        <option value="2" {{ request('kitchen') == 2 ? 'selected' : '' }}>Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="garden" id="garden" class="form-select">
                                        <option value="" selected>Ogródek</option>
                                        <option value="1" {{ request('garden') == 1 ? 'selected' : '' }}>Tak</option>
                                        <option value="2" {{ request('garden') == 2 ? 'selected' : '' }}>Nie</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <select name="price" id="price" class="form-select">
                                        <option value="0" selected>Przedział cenowy</option>
                                        <option value="1">300-450 tyś. PLN</option>
                                        <option value="2">450-600 tyś. PLN</option>
                                        <option value="3">600-800 tyś. PLN</option>
                                        <option value="4">800-999 tyś. PLN</option>
                                        <option value="5">powyżej 1,0 mln PLN</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="type" id="apartment" class="form-select">
                                        <option value="1" {{ request('type') == 1 ? 'selected' : '' }}>Lokal Mieszkalny</option>
                                        <option value="2" {{ request('type') == 2 ? 'selected' : '' }}>Lokal użytkowy</option>
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
