<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@400;500;600;700&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <header>
        <h1>Atte</h1>
        <nav>
            <ul>
                @if (Auth::check())
                <li><a class="menu__link" href="/">ホーム</a></li>
                <li><a class="menu__link" href="/date">日付一覧</a></li>
                <li>
                    <form class="form" action="/logout" method="post">
                        @csrf
                        <button class="logout" href="">ログアウト</button>
                    </form>
                </li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>Atte, inc.</small>
    </footer>
</body>

</html>