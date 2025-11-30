<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center mb-6">Welcome Back</h2>

        @if(session('status'))
            <p class="text-green-600 mb-3">{{ session('status') }}</p>
        @endif

        @if($errors->any())
            <ul class="text-red-600 mb-3">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label class="block mb-2">Email</label>
            <input type="email" name="email"
                   class="w-full border rounded px-3 py-2 mb-4"
                   required>

            <label class="block mb-2">Password</label>
            <input type="password" name="password"
                   class="w-full border rounded px-3 py-2 mb-4"
                   required>

            <div class="flex justify-between items-center mb-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-blue-600 text-sm">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>

</body>
</html>
