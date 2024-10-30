@php
    $menuIds = is_string($menuIds) ? json_decode($menuIds, true) : $menuIds;
@endphp
@php
    // Define all possible links in the submenu component
    $links = collect([
        [
            'id' => '1',
            'title' => 'Opis inwestycji',
            'href' => route('developro.show', $investment->slug).'#opis-inwestycji',
            'active' => false,
        ],
        [
            'id' => '2',
            'title' => 'Wyszukaj z rzutu',
            'href' => route('developro.plan', $investment->slug),
            'active' => false,
        ],
        [
            'id' => '3',
            'title' => 'Wyszukaj z modelu 3D',
            'href' => route('developro.plan', $investment->slug).'#model-3d',
            'active' => false,
        ],
        [
            'id' => '4',
            'title' => 'Lokalizacja',
            'href' => route('developro.show', $investment->slug).'#lokalizacja',
            'active' => false,
        ],
        [
            'id' => '5',
            'title' => 'Atuty',
            'href' => route('developro.show', $investment->slug).'#atuty',
            'active' => false,
        ],
        [
            'id' => '6',
            'title' => 'Dziennik inwestycji',
            'href' => route('developro.investment.news', $investment->slug),
            'active' => false,
        ],
        [
            'id' => '7',
            'title' => 'Kontakt',
            'href' => route('developro.show', $investment->slug).'#kontakt',
            'active' => false,
        ],
    ])->whereIn('id', $menuIds); // Filter links by menuIds
@endphp

<nav class="fixed-top-menu bg-white" id="navbar-secondary">
    <ul class="navbar-nav with-underline-active nav-snap-md-down flex-row justify-content-around py-3"
        style="--bs-nav-link-color: var(--bs-secondary);--bs-nav-link-hover-color: var(--bs-primary); --bs-navbar-active-color: var(--bs-secondary);">
        @foreach ($links as $link)
            <li class="nav-item">
                <a class="nav-link {{ $link['active'] ? 'active' : '' }}" href="{{ $link['href'] }}">{{ $link['title'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
