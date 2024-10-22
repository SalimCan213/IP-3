
<!DOCTYPE html>
<html>
<head>
    <title>ÇTBMYO</title>
    <meta charset="utf-8" />
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
        }
        header, footer {
            background-color: lightcyan;
            text-align: center;
        }
        main {
            padding: 2em;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 1em;
        }
    </style>
</head>
<body>
<header>
    <h1>Çanakkale Teknik Bilimler Meslek Yüksekokulu</h1>
</header>
<nav>
    <ul>
        <li><a href="/">Ana Sayfa</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li><a href="/contact">İletişim</a></li>
    </ul>
</nav>
<main>
    @yield('main')
</main>
<footer>
    Copyright &copy; 2024 | Çanakkale Teknik Bilimler MYO
</footer>
</body>
</html>
