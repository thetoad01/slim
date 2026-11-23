<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Defoe Shipbuilding' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/site.css">
    @stack('styles')
</head>
<body class="{{ $theme ?? '' }}">
    <x-menu />

    <main>
        @yield('content')
    </main>

    <footer class="site-foot">
        <div class="container d-flex justify-content-between flex-wrap gap-2">
            <span>&copy; {{ date('Y') }} Defoe Shipbuilding</span>
            <span>Bay City · 1905–1976</span>
        </div>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
