<!DOCTYPE html>
<html>

<head>
    <title>Login Sistem</title>
    <link href=
"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center
              min-h-screen bg-gray-200">
    <div class="main bg-white rounded-lg shadow-md p-10
    transition-transform w-96 text-center">
        <h1 class="text-green-600 text-3xl">
            GeeksforGeeks
        </h1>
        <h3 class="text-lg">
            Enter your login credentials
        </h3>

        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form action="/login" method="post">
            @csrf
            @method('POST')
            <label for="email" class="block mt-4 mb-2 text-left text-gray-700 font-bold">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email"
                class="block w-full mb-6 px-4 py-2 border border
                -gray-300 rounded-md focus:outline-none
                 focus:border-green-400"
                required>

            <label for="password" class="block mb-2 text-left text-gray-700 font-bold">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password"
                class="block w-full mb-6 px-4 py-2 border border
                -gray-300 rounded-md focus:outline-none
                focus:border-green-400"
                required>

            <div class="flex justify-center items-center">
                <button type="submit"
                    class="bg-green-600 text-white py-3 px-6 rounded
                    -md cursor-pointer transition-colors
                    duration-300 hover:bg-green-500">
                    Submit
                </button>
            </div>
        </form>
        <p class="mt-4">Not registered?
            <a href="#" class="text-blue-500
            hover:underline">Create an account</a>
        </p>
    </div>
</body>

</html>
