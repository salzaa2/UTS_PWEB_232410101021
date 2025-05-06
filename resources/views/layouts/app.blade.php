<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Dashboard Hotel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/botstrap.min.css" rel="stylesheet">
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

        .hotel-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 70px;
            padding: 60px 55px 60px;
            flex-wrap: wrap;
            background-color: #d0e8f4;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .hotel-info img {
            width: 600px;
            height: 360px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .hotel-description {
            max-width: 800px;
        }

        .hotel-description h1 {
            font-size: 50px;
            margin-bottom: 20px;
            color: #222;
        }

        .hotel-description p {
            font-size: 24px;
            line-height: 1.8;
            color: #444;
            text-align: justify;
            font-style: Roboto;
        }

        .title {
            text-align: center;
            margin: 3rem 0 1.5rem;
            font-size: 36px;
            color: #333;
        }

        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            padding: 0 30px 50px;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
            width: 280px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            transition: transform 0.2s ease;
            background-color: #d0e8f4;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 1rem;
        }

        .card h3 {
            margin-top: 0;
            font-size: 1.3rem;
        }

        .price {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }

        footer {
            background-color: #00050a;
            text-align: center;
            padding: 1mm;
            font-size: 16px;
            color: white;
        }

        .title {
            text-align: center;
            margin: 2rem 0 1rem;
            font-size: 44px;
        }

        table {
            width: 90%;
            margin: 0 auto 2rem;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        img {
            width: 100px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }

        .actions button {
            padding: 6px 10px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit {
            background-color: #007bff;
            color: white;
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }

    </style>
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
