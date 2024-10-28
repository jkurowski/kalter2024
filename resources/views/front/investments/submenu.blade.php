@props([
    'id' => 'navbar-secondary',
    'links' => [
        [
            'title' => 'Opis inwestycji',
            'href' => '#opis-inwestycji',
            'active' => false,
        ],
        [
            'title' => 'Wyszukaj z rzutu',
            'href' => '#mieszkania',
            'active' => false,
        ],
        [
            'title' => 'Wyszukaj z modelu 3D',
            'href' => '#model-3d',
            'active' => false,
        ],
        [
            'title' => 'Atuty',
            'href' => '#atuty',
            'active' => false,
        ],
        [
            'title' => 'Lokalizacja',
            'href' => '#lokalizacja',
            'active' => false,
        ],
        [
            'title' => 'Dziennik inwestycji',
            'href' => '#dziennik-inwestycji',
            'active' => false,
        ],
        [
            'title' => 'Kontakt',
            'href' => '#kontakt',
            'active' => false,
        ],
    ],
])

<nav class="fixed-top-menu bg-white" id="{{ $id }}">
    <ul class="navbar-nav with-underline-active nav-snap-md-down flex-row justify-content-around py-3"
        style="--bs-nav-link-color: var(--bs-secondary);--bs-nav-link-hover-color: var(--bs-primary); --bs-navbar-active-color: var(--bs-secondary);">
        @foreach ($links as $link)
            @if ($link)
                <li class="nav-item">
                    <a class="nav-link {{ $link['active'] ? 'active' : '' }}" href="{{ $link['href'] }}">{{ $link['title'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</nav>

