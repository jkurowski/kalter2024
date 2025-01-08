<div class="layout-item">
    <!-- List layout content -->
    <div class="invest-card-list text-secondary d-flex column-gap-4 row-gap-3 position-relative align-items-center flex-wrap flex-xl-nowrap justify-content-between">
        <div class="col-xl-auto">
            <p class="h4 lh-1 mb-1">
                {{ $p->name }}
            </p>
            <p class="fw-bold fs-15 mb-0">
                {{ $p->investment->name }}
            </p>
            <p class="d-none">
                <small>
                    Etap: I
                </small>
            </p>
        </div>
        <div class="col-xl-auto d-flex column-gap-30 row-gap-3 align-items-center flex-wrap flex-lg-nowrap flex-fill justify-content-md-center">
            <div class="d-flex gap-2">
                <div><img src="{{ asset('img/location.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"></div>
                <div>{{ $p->investment->city->name }}</div>
            </div>
            <div class="vr" style="color:#DFDEDE;"></div>
            <div class="fs-13 d-flex gap-2">
                <div><img src="{{ asset('img/tile.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"></div>
                <div>{{ $p->floor->name }}</div>
            </div>
            <div class="vr" style="color:#DFDEDE;"></div>
            <div class="fs-13 d-flex gap-2">
                <div><img src="{{ asset('img/blueprint.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"></div>
                <div>{{ $p->area }} m<sup>2</sup></div>
            </div>
            <div class="vr" style="color:#DFDEDE;"></div>
            <div class="fs-13 d-flex gap-2">
                <div><img src="{{ asset('img/rooms.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="13" height="13"></div>
                <div>{{ $p->rooms }}</div>
            </div>
        </div>
        <div class="col-xl-2 text-lg-center">
            <?php if ($p->status == 3) : ?>
            <p class="text-danger text-uppercase fw-bold fs-5 mb-0">Sprzedany</p>
            <?php elseif ($p->status == 1) : ?>
            <p class="text-success text-uppercase fw-bold fs-5 mb-0">Dostępny</p>
            <?php else : ?>
            <p class="text-warning text-uppercase fw-bold fs-5 mb-0">Rezerwacja</p>
            <?php endif; ?>
        </div>
        <div class="position-relative z-2 col-xl-auto">
            <a class="btn btn-primary btn-with-icon text-nowrap" href="#">
                Sprawdź
                <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor"></path></svg>
            </a>
        </div>
        <a class="stretched-link d-contents" href="#">
        </a>
    </div>

    <!-- Grid layout content -->
    <div class="invest-card-horizontal position-relative d-flex flex-column-reverse flex-lg-row justify-content-between bg-white my-0">
        <div class="text-secondary invest-card-horizontal-left flex-fill min-w-md-down-auto">
            <p class="h4 mb-0">
                {{ $p->name }}
            </p>
            <p class="fs-10 text-uppercase fw-900 mb-0">
                {{ $p->investment->name }}
            </p>
            <p class="mb-2 d-none">
                <small>
                    Etap: I
                </small>
            </p>

            @if($p->investment->show_prices)
                <p class="h4 mb-1 d-flex flex-wrap align-items-center column-gap-2 ff-secondary">
                    @if($p->price && !$p->highlighted)
                        <span>@money($p->price)</span>
                    @else
                        @if($p->promotion_price)
                            <span>@money($p->promotion_price)</span>
                        @endif
                        @if($p->price)
                            <span class="text-body-emphasis opacity-50 fs-6 align-middle text-decoration-line-through">@money($p->price)</span>
                        @endif
                    @endif
                </p>

                @if($p->promotion_price)
                    @if($p->price_30)
                        <p class="fs-8 text-black mb-0">
                            Najniższa cena z ostatnich 30 dni: @money($p->price_30)
                        </p>
                    @endif
                @endif
            @endif

            <?php if ($p->status == 3) : ?>
            <p class="text-danger text-uppercase fw-bold">Sprzedany</p>
            <?php elseif ($p->status == 1) : ?>
            <p class="text-success text-uppercase fw-bold">Dostępny</p>
            <?php else : ?>
            <p class="text-warning text-uppercase fw-bold">Rezerwacja</p>
            <?php endif; ?>

            <div class="small mb-40">
                <table class="w-100">
                    <tbody>
                    <tr>
                        <td class="td-with-icon"><img src="{{ asset('img/tile.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                        <td>Piętro</td>
                        <td class="text-end">{{ $p->floor->name }}</td>
                    </tr>
                    <tr>
                        <td class="td-with-icon"><img src="{{ asset('img/blueprint.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                        <td>Metraż</td>
                        <td class="text-end">{{ $p->area }} m<sup>2</sup></td>
                    </tr>
                    <tr>
                        <td class="td-with-icon"><img src="{{ asset('img/rooms.svg') }}" alt="" loading="lazy" decoding="async" class="w-10 h-10 object-fit-contain" width="12" height="12"></td>
                        <td>Liczba Pokoi</td>
                        <td class="text-end">{{ $p->rooms }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="position-relative z-2">
                <a class="btn btn-primary btn-with-icon text-nowrap" href="#">
                    Sprawdź
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.073" height="11.062" viewBox="0 0 6.073 11.062"><path id="chevron_right_FILL0_wght100_GRAD0_opsz24" d="M360.989-678.469,356-683.458l.542-.542,5.531,5.531-5.531,5.531L356-673.48Z" transform="translate(-356 684)" fill="currentColor"></path></svg>
                </a>
            </div>
        </div>

        <div class="invest-card-horizontal-right">
            @if($p->file)
                <picture>
                    @if($p->file_webp)
                        <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$p->file_webp) }}">
                    @endif
                    <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$p->file) }}">
                    <img src="{{ asset('/investment/property/thumbs/'.$p->file) }}" alt="{{$p->name}}" class="w-100" loading="lazy" decoding="async" class="w-100 h-100 object-fit-contain">
                </picture>
            @endif
        </div>
        <a class="stretched-link" href="#"></a>
    </div>
</div>