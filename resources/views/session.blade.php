<h1>Bienvenido</h1>
<form class="mt-4" method="post" action="{{route('login.logout')}}">
    @csrf

<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Logout</button>
