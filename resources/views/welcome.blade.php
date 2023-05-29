<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <style>
        body {
            font-family: 'Segoe UI';
        }

        .place-centered {
            display: flex;
            place-items: center;
            justify-content: center;
            min-height: 90vh;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav>
    <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/register">Register</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

<section class="place-centered">
    <h1>Welcome to Laravel!</h1>
</section>
</body>
</html>
