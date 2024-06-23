@extends('layouts.app')
@section('titulo','Dashboard')
@section('contenido')

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Hola, {{ auth()->user()->name }}</h1>
        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        <a href="{{ route('apartamentos.index') }}" id="Boton" class="bg-orange-500 text-white font-semibold px-4 py-2 mt-4 rounded hover:bg-green-800 transition duration-200">Ver apartamentos</a>
      </div>
    </div>
  </div>
@endsection
