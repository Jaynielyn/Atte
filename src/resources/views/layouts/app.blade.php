<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header>
        <h1 class="ttl">Atte</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>Atte, inc.</small>
    </footer>
</body>

</html>