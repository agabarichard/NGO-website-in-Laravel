<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
</head>
<style>
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #e1eddb;
        height: 80px;
    }
    nav ul {
        list-style: none;
        display: flex;
        gap: 1rem;
    }
    nav ul li {
        margin: 0;
    }
    nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }
</style>
<body>
    <nav>
        <img src="{{ asset('images/logo.png') }}" alt="logo" />
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/programs">Programs</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>   
    </nav>
    
</body>
</html>