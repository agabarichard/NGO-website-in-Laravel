<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            {{-- <li><a href="/about">About Us</a></li> --}}
            <li><a href="/pages/programs">Programs</a></li>
            <li><a href="/pages/contact">Contact</a></li>
        </ul> 
        
                    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
    
</body>
</html>