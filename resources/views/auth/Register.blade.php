@extends('app')
@section('title','Register')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <h1 class="text-3x1 text-center font-bold">Login</h1>
    <form class="mt-4" method="post" action="{{route('register.store')}}">
    @csrf
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Enter your Name"
        id="name" name="name">
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Enter your email"
        id="email" name="email">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Enter your password"
        id="password" name="password">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Repeat password "
      id="password_Confirmation" name="password_Confirmation">
    @error('mesagge')
         <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*ERROR</p>
    @enderror

    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>

@endsection
