@extends('app')
@section('title','Codigo')
@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3x1 text-center font-bold">Ingrese el codigo</h1>
<form class="mt-4" method="post" action="{{route('login.comprobar')}}">
        @csrf
        <input id="codigo1" name="codigo1" type="hidden" value={{$dd}}>
        <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ingresa el codigo"
        id="codigo2" name="codigo2">
    @error ('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*ERROR</p>
    @enderror
    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    @endsection
