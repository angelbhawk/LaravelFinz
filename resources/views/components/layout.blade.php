<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BlueLink offers professional services and project details. Get in touch with us for more information.">
    <title>@yield('title', '') - LaravelFinz</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/finz.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.nav.dark')
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</body>
</html>