<section class="home-search">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                <form action="{{ route('developro.search.index') }}"
                      method="get"
                      class="bg-secondary text-white rounded d-flex row-gap-0 flex-wrap flex-sm-nowrap search-form"
                      autocomplete="off">
                    <div
                        class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-3 align-items-end px-30 py-3 w-md-100 pb-md-40 pb-20">
                        <p class="col-12 w-100 text-uppercase mb-0">Wyszukiwarka</p>
                        <div class="col">
                            <select name="city" id="city" class="form-select">
                                <option value="" selected>Miasto</option>
                                @foreach($cities as $c)
                                    <option value="{{ $c->id }}" {{ request('city') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select name="rooms" id="rooms" class="form-select">
                                <option value="">Pokoje</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">4</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="area" id="area" class="form-select">
                                <option value="">Powierzchnia</option>
                                <option value="30-50" {{ request('area') == '30-50' ? 'selected' : '' }}>30-50 m²</option>
                                <option value="51-70" {{ request('area') == '51-70' ? 'selected' : '' }}>51-70 m²</option>
                                <option value="71-90" {{ request('area') == '71-90' ? 'selected' : '' }}>71-90 m²</option>
                                <option value="91-110" {{ request('area') == '91-110' ? 'selected' : '' }}>91-110 m²</option>
                                <option value="111-300" {{ request('area') == '111-300' ? 'selected' : '' }}>> 110 m²</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="advanced" id="advanced" class="form-select">
                                <option value="">Zaawansowanie</option>
                                <option value="1">Przedsprzedaż</option>
                                <option value="2">Realizacja 20%</option>
                                <option value="3">Realizacja 40%</option>
                                <option value="4">Realizacja 60%</option>
                                <option value="5">Realizacja 80%</option>
                                <option value="6">Realizacja 100%</option>
                                <option value="7">Gotowe do odbioru</option>
                            </select>
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
