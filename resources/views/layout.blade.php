<!-- layout.blade.php -->

<!DOCTYPE html>
<html>

<head>

    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Typography */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        /* Header */
        header {
            background-color: #ddd;
            padding: 20px;
        }

        /* Navigation */
        nav {
            background-color: #333;
            padding: 10px;


        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 10px;

        }

        li {
            margin-top: 15px;
            color: blue;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 100px;
        }



        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            text-decoration: underline;
            color: violet;
            border-radius: 2px solid burlywood;
        }


        /* Main Content */
        main {
            padding: 20px;
        }

        a {
            color: blue;
        }

        /* Footer */
        footer {
            background-color: skyblue;
            padding: 20px;
            text-align: center;
            color: blue;
            border: 10px solid violet;
            margin-top: 200px;
            font-size: large;


        }

        #top {
            text-align: center;
            color: blueviolet;
            margin-top: 5px;
        }
    </style>

</head>

<body>
    <header>
        <h1 id="top">Welcome to My Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
    <br>
    <br>


    <footer id="foot">
        From Geme
    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>