<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Resetting default margins and paddings */
        body, nav, ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
        }

        nav ul {
            display: inline-block;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffc107;
        }

        main {
            padding-top: 60px; /* Adjust according to navbar height */
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav>
        <ul>
            <li><a href="Home">Home</a></li>
            <li><a href="About">About</a></li>
            <li><a href="Service">Service</a></li>
            <li><a href="ContactUs">Contact Us</a></li>
            <li><a href="/Login">Login</a></li>
            <li><a href="/Register">Register</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        &copy; 2024 Company Name. All Rights Reserved.
    </footer>
</body>
</html>
