<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tailwind Tutorial</title>
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body class="bg-indigo-800">
      <header class="bg-gray-900 sm:flex sm:justify-between items-center sm:px-4 sm:py-3">
        <div class="flex items-center justify-between px-4 py-3 sm:p-0">
          <div>
            <img class="h-8" src="/img/logo-inverted.svg" alt="logo">
          </div>
          {{-- <div class="bg-gray-700 text-white">Login</div> --}}
          <div class="sm:hidden">
            <button type="button" class="block text-gray-400 hover:text-white focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
              </svg>
            </button>
          </div>
        </div>
        <div class="text-white px-2 pt-2 pb-4 sm:p-0 sm:block">
          <div class="sm:flex">
            <a href="#" class="block text-sm font-semibold hover:bg-gray-800 rounded px-2 py-1">List your Property</a>
            <a href="#" class="block text-sm font-semibold hover:bg-gray-800 rounded px-2 py-1 my-1 sm:my-0 sm:mx-2">Trips</a>
            <a href="#" class="block text-sm font-semibold hover:bg-gray-800 rounded px-2 py-1">Messages</a>
          </div>
        </div>
      </header>
    </body>
</html>
