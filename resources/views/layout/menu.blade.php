<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Toko Obat</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            color: black;
        }

        .navbar {
            background-color: #333;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar a {
            display: inline-block;
            padding: 14px 25px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: blue;
        }

        .content {
            padding: 30px;
        }

        h3 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }

        input[type="text"], input[type="number"], input[type="email"], select {
            padding: 6px;
            width: 200px;
            margin: 5px;
        }

        .form-container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .button {
            background: none;
            border: none;
            color: blue;
            text-decoration: underline;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 2px;
            margin-bottom: 4px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="{{ route('home') }}">HOME</a>
        <a href="{{ route('admin.index') }}">ADMIN</a>
        <a href="{{ route('pemesanan') }}">PEMESANAN</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
