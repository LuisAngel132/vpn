<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')-Laravel App</title>

    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

  </head>
  <body>
    <!-- Document body -->
    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold">MY APP</p>
            <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li>
            <a class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md"  href="{{route('login.index')}}">Log In</a>
            <a class="font-semibold border-white py-2 px-4 rounded-md  hover:bg-black hover-text-indigo-700" href="{{route('register.index')}}">Register</a>
            </li>
            </ul>
            </div>
    </nav>
@yield('content')

  </body>
</html>
