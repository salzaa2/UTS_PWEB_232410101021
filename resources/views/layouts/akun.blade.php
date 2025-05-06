<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'Dashboard Hotel')</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #70adcb;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #085584;
            padding: 1.2rem 2rem;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #70adcb;
        }

        footer {
            background-color: #00050a;
            text-align: center;
            padding: 1mm;
            font-size: 16px;
            color: white;
        }

        body {
            background-image: url('https://cdn0-production-images-kly.akamaized.net/IyyXRhhKeG9RG1iheP16_oSj3fY=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/816952/original/009819900_1424831012-bali-2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            margin-top: auto;
            min-height: 100vh;
        }

        .card-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            padding: 40px 50px;
            max-width: 600px;
            width: 100%;
            margin: 65px;
            border-left: 6px solid #2c3e50;
        }

        .card-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .card-header h1 {
            font-size: 36px;
            color: #2c3e50;
            margin: 0;
        }

        .card-body {
            font-size: 18px;
            color: #333;
            display: grid;
            row-gap: 15px;
        }

        .info-box {
            display: grid;
            grid-template-columns: 150px 1fr;
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 12px 20px;
            column-gap: 10px;
        }

        .info-box label {
            font-weight: bold;
            color: #2c3e50;
            text-align: left;
        }

        .info-box span {
            color: #444;
        }

        @media screen and (max-width: 768px) {
        .card {
            padding: 20px 30px;
        }

        .card-header h1 {
            font-size: 28px;
        }

        .info-box {
            grid-template-columns: 1fr;
        }

        .info-box label {
            text-align: left;
            margin-bottom: 5px;
        }

        .navbar ul {
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
        }

        main {
            flex-grow: 1; /* Memastikan main mengisi ruang kosong */
        }

        footer {
            background-color: #00050a;
            text-align: center;
            padding: 1mm;
            font-size: 16px;
            color: white;
        }
    }
    </style>

    @stack('styles')
</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('pengelolaan') }}">Pengelolaan</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 - UTS PWEB Laravel</p>
    </footer>
</body>
</html>
