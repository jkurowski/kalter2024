<div class="header-holder">
    <header class="sticky-top">
        <nav class="navbar bg-white navbar-expand-xl header-paddings">
            <div class="container-fluid">
                <a class="navbar-brand header-logo-container" href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="Logo" width="262" height="87" class="img-fluid header-logo" loading="eager">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 align-items-xl-center fw-semibold">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-hover" href="{{ route('developro.index') }}" data-bs-hover="dropdown" aria-expanded="false">
                                    Oferta
                                    <svg class="d-none d-xl-inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down ms-2" viewBox="0 0 16 16" id="navbar-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-uppercase" href="/pl/wyniki-wyszukiwania?type=1">Lokale mieszkalne</a></li>
                                    <li><a class="dropdown-item text-uppercase" href="/pl/wyniki-wyszukiwania?type=2">Lokale usługowe</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-hover" href="#" data-bs-hover="dropdown" aria-expanded="false">
                                    O firmie
                                    <svg class="d-none d-xl-inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down ms-2" viewBox="0 0 16 16" id="navbar-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                                </a>
                                <ul class=" dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('developro.completed') }}">Inwestycje zrealizowane</a></li>
                                    <li><a class="dropdown-item" href="{{ route('menu.show', ['uri' => 'deweloper']) }}">Deweloper</a></li>
                                    <li><a class="dropdown-item" href="{{ route('menu.show', ['uri' => 'kariera']) }}">Kariera</a></li>
                                    <li><a class="dropdown-item" href="https://www.kalter.pl/o-nas" target="_blank">Grupa Kalter</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-hover" href="#" data-bs-hover="dropdown" aria-expanded="false">
                                    Dla klienta
                                    <svg class="d-none d-xl-inline" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down ms-2" viewBox="0 0 16 16" id="navbar-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                                </a>
                                <ul class=" dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('menu.show', ['uri' => 'kredyty']) }}">Kredyty</a></li>
                                    <li><a class="dropdown-item" href="{{ route('menu.show', ['uri' => 'programy-wykonczeniowe']) }}">Programy wykończeniowe</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aktualnosci.index') }}">Aktualności</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
                            </li>

                            <li class="nav-item dropdown d-none">
                                <a class="nav-link dropdown-hover" href="#" data-bs-hover="dropdown" aria-expanded="false">
                                    <img src='{{ asset('img/eng.svg') }}' alt="" width="20" height="20" loading="eager">

                                </a>
                                <div class=" dropdown-menu lang-dropdown">
                                    <form action="">

                                        <div class="">
                                            <input class="d-none" type="radio" name="lang" id="lang-pl" value="pl" checked>
                                            <label for="lang-pl" class="dropdown-item"><img src='{{ asset('img/eng.svg') }}' alt="" width="20" height="20" loading="eager"></label>
                                        </div>
                                        <div>
                                            <input class="d-none" type="radio" name="lang" id="lang-en" value="en">
                                            <label for="lang-en" class="dropdown-item"><img src='{{ asset('img/eng.svg') }}' alt="" width="20" height="20" loading="eager"></label>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
<div id="megamenu-opacity"></div>
