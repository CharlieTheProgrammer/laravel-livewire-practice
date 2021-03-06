<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Tailwind Tutorial</title>
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body class="bg-gray-300">
      <div class="bg-gray-100 flex">
        <div class="px-8 py-12 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
          <div class="xl:max-w-lg xl:mx-auto">
            <img class="h-10" src="/img/logo.svg" alt="workCation">
            <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden" src="/img/beach-work.jpg" alt="women workcation">
            <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:mt-8 sm:text-4xl lg:text-3xl">You can work from anywhere. </br>
              <span class="text-indigo-500">Take advantage of it!</span>
            </h1>
            <p class="mt-2 text-gray-600 sm:mt-4 sm:text-xl">Workcation helps you find work-friendly rentals in beautiful locations so you can enjoy nice weather when you're not on vacation.</p>
            <div class="mt-4 sm:mt-6">
              <a class="btn" href="#">Book Your Escape</a>
            </div>
          </div>
        </div>
        <div class="hidden lg:block lg:w-1/2 lg:relative">
          <img class="absolute inset-0 h-full w-full object-cover object-center" src="/img/beach-work.jpg" alt="women workcation">
        </div>
      </div>
    </body>
</html>
