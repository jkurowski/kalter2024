<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/uploads/{{ settings()->get("page_favicon") }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@700;900&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v=1404v1" />
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" media="(min-width: 550px)" />

    <!-- Preloads -->
    <link rel="preload" href="{{ asset('img/logo.svg') }}" as="image" />
    <!-- /Preloads -->

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : 'homepage' }}">
{!! settings()->get("scripts_afterbody") !!}

    @include('layouts.partials.header')

<main>
    @yield('content')

    @include('layouts.partials.cta', ['page' => 'Strona główna'])
</main>

    @auth
        @include('layouts.partials.inline')
    @endauth

    @include('layouts.partials.footer')

    @stack('scripts')

    {!! settings()->get("scripts_beforebody") !!}
</body>
</html>
