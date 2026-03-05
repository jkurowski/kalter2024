<div class="container invest-card-list text-secondary property-list-item @if($p->status == 3) property-list-item-sold @endif">
    <div class="row">
        <div class="col-6 half-1">
            <div class="row">
                <div class="col-2 d-flex align-items-center property-list-item-col-1">
                    <div class="property-list-item-name">
                        <h2 class="h4 lh-1 mb-2">{{ $p->name }}</h2>
                        <span class="mb-0 lh-1 d-block">{{ $p->investment->name }}</span>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center property-list-item-col-2">
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="row">
                                <div class="d-flex d-flex align-items-center gap-2 property-list-item-info property-list-item-city">
                                    <img src="{{ asset('img/location.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"> {{ $p->investment->city->name }}
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4 d-flex align-items-center gap-2 property-list-item-info">
                                    <img src="{{ asset('img/tile.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"> {{ $p->floor->name }}
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2 property-list-item-info p-0">
                                    <img src="{{ asset('img/blueprint.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"> {{ $p->area }} m<sup>2</sup>
                                </div>
                                <div class="col-4 d-flex align-items-center gap-2 property-list-item-info p-0">
                                    <img src="{{ asset('img/rooms.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"> {{ $p->rooms }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 property-list-item-col-3 d-flex align-items-center">
                    <div>
                        @if($p->price_brutto && $p->status == 1 && !$p->highlighted)
                            <p class="h3 lh-1 mb-0">@money($p->price_brutto)</p>
                            <span class="d-block small">@money(($p->price_brutto / $p->area)) / m<sup>2</sup></span>
                        @endif
                        @if($p->price_brutto && $p->status == 1 && $p->highlighted)
                            <p class="h3 lh-1 mb-0 promo-price">@money($p->promotion_price)</p>
                            <span class="d-block small promo-price">@money(($p->promotion_price / $p->area)) / m<sup>2</sup></span>
                        @endif
                        @if($p->status <> 1)
                            <p class="h3 lh-1 mb-0 promo-price">&nbsp;</p>
                            <span class="d-block small promo-price">&nbsp;</span>
                        @endif
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center property-list-item-status property-list-item-col-4">
                    <div class="w-100 text-center">
                        @if($p->status == 1 && $p->highlighted)
                            <p class="text-highlighted text-uppercase fw-bold fs-5 mb-0 lh-1">Promocja</p>
                        @endif
                        @if ($p->status == 1 && !$p->highlighted)
                            <p class="text-success text-uppercase fw-bold fs-5 mb-0 lh-1">Dostępny</p>
                        @endif
                        @if ($p->status == 2)
                            <p class="text-warning text-uppercase fw-bold fs-5 mb-0 lh-1">Rezerwacja</p>
                        @endif
                        @if ($p->status == 3)
                            <p class="text-danger text-uppercase fw-bold fs-5 mb-0 lh-1">Sprzedany</p>
                        @endif
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center property-list-item-col-5">
                    @if(Route::currentRouteName() === 'clipboard.index')
                        <button id="addToFav" class="btn btn-primary btn-with-icon text-nowrap w-100" data-id="{{$p->id}}">
                            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.5001 6H3.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M18.8332 8.5L18.3732 15.3991C18.1962 18.054 18.1077 19.3815 17.2427 20.1907C16.3777 21 15.0473 21 12.3865 21H11.6132C8.95235 21 7.62195 21 6.75694 20.1907C5.89194 19.3815 5.80344 18.054 5.62644 15.3991L5.1665 8.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M9.5 11L10 16" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M14.5 11L14 16" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="#ffffff" stroke-width="1.5"/>
                            </svg>
                        </button>
                    @endif
                    @if($p->investment->type == 1)
                        <a class="btn btn-primary btn-with-icon text-nowrap w-100" href="{{ route('developro.building.floor.property', [
                            $p->investment->slug,
                            $p->building,
                            Str::slug($p->building->name),
                            $p->floor,
                            Str::slug($p->floor->name),
                            $p,
                            Str::slug($p->name),
                            number2RoomsName($p->rooms, true),
                            round(floatval($p->area), 2).'-m2'
                        ]) }}">
                    @endif
                    @if($p->investment->type == 2)
                        <a class="btn btn-primary btn-with-icon text-nowrap w-100" href="{{ route('developro.property', [
                            $p->investment->slug,
                            $p->floor,
                            Str::slug($p->floor->name),
                            $p,
                            Str::slug($p->name),
                            number2RoomsName($p->rooms, true),
                            round(floatval($p->area), 2).'-m2'
                        ]) }}">
                    @endif
                            Sprawdź
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor"></path></svg>
                        </a>

                </div>
            </div>
        </div>
        <div class="col-6 half-2">
            @if($p->file)
                <picture>
                    @if($p->file_webp)
                        <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$p->file_webp) }}">
                    @endif
                    <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$p->file) }}">
                    <img src="{{ asset('/investment/property/thumbs/'.$p->file) }}" alt="{{$p->name}}" loading="lazy" decoding="async" class="w-100 h-100 object-fit-contain">
                </picture>
            @endif
        </div>
    </div>
</div>
