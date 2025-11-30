<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">

        <aside class="w-64 bg-blue-700 text-white min-h-screen p-5">
            <h2 class="text-2xl font-bold mb-8">My Dashboard</h2>

            <nav class="space-y-4">
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Home</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Profile</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Messages</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Settings</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="w-full text-left py-2 px-3 rounded hover:bg-red-600 mt-10">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">

            <h1 class="text-3xl font-bold mb-6">Welcome back, {{ Auth::user()->name }}!</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Users</h3>
                    <p class="text-3xl font-bold">150</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Reports</h3>
                    <p class="text-3xl font-bold">34</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">Notifications</h3>
                    <p class="text-3xl font-bold">8</p>
                </div>

            </div>

        </main>

    </div>

</body>
</html>
