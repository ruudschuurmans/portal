<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suburbia Authentication</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300">

<div class="min-h-screen flex items-start justify-center bg-gray-50 pt-20 pb-12 px-4 sm:px-6 lg:px-8 hp">
    <div class="max-w-md w-full">
        <div>
            <img class="mx-auto h-12 w-auto bg-gray-800 p-3 rounded-sm" src="/static/brand.svg" alt="Suburbia">
            <h2 class="mt-6 text-center text-2xl leading-9 font-extrabold text-gray-900">
                Sign in to your account
            </h2>
        </div>

        @if (Session::has('info'))
            <div class="rounded-md shadow-sm bg-green-500 text-white p-2 text-sm w-full text-center mt-6">
                {{ Session::get('info') }}
            </div>
        @endif

        <form class="mt-8" method="POST">

            {{ csrf_field() }}

            <div class="rounded-md shadow-sm">
                <div>
                    <input class="appearance-none relative block w-full px-3 py-2 border-2 border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" aria-label="Email address" name="email" type="email" required="" placeholder="Email address">
                </div>
            </div>

            <div class="mt-6">
                <button class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out" type="submit">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
              </span>
                    Sign in
                </button>
            </div>
        </form>


    </div>
</div>

</body>
</html>
