<div class="row pt-md-50 mt-30">
    <div class="col-12">
        <p class="h5 fw-semibold text-secondary mb-3 mb-md-30">Infrastruktura w otoczeniu inwestycji</p>
    </div>
    @foreach ($infrastructure as $group => $items)
        <div class="col-12 col-md-6 col-xl-3 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="infrastructure-card">
                <p class="infrastructure-card__title">{{ $group }}</p>
                <ul class="infrastructure-card__list">
                    @foreach ($items as $item)
                        <li>
                            <span class="infrastructure-card__name">{{ $item['name'] }}</span>
                            <span class="infrastructure-card__distance">
                                {{ $item['distance'] }}
                                @if (!empty($item['time']))
                                    <small>{{ $item['time'] }} pieszo</small>
                                @endif
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
