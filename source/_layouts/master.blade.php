<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title', $page->title)</title>
    <meta name="keywords" content="@yield('keywords', $page->keywords)">
    <meta name="description" content="@yield('description', $page->description)">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
	@include('_partials.header')
    <div class="master">
        @yield('body')
    </div>
    @include('_partials.footer')

    <script type="text/javascript" src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
