<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-96">
        
        <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>

        <!-- Validation Errors -->
        @if($errors->any())
            <ul class="text-red-600 mb-4">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name"
                   value="{{ old('name') }}"
                   required
                   class="w-full border rounded px-3 py-2 mb-4">

            <!-- Email -->
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email"
                   value="{{ old('email') }}"
                   required
                   class="w-full border rounded px-3 py-2 mb-4">

            <!-- Password -->
            <label class="block mb-1 font-semibold">Password</label>
            <input type="password" name="password"
                   required
                   class="w-full border rounded px-3 py-2 mb-4">

            <!-- Confirm Password -->
            <label class="block mb-1 font-semibold">Confirm Password</label>
            <input type="password" name="password_confirmation"
                   required
                   class="w-full border rounded px-3 py-2 mb-6">

            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Register
            </button>

            <p class="text-center text-sm mt-4">
                Already registered?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                    Login
                </a>
            </p>

        </form>

    </div>

</body>
</html>
