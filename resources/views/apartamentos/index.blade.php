@extends('layouts.app')
@section('titulo', 'Consultar Apartamentos')
@section('contenido')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
        @foreach ($apartamentos as $apartamento)
            <div class="card w-60 bg-base-100 shadow-xl">
                <figure>
                    <img src="https://source.unsplash.com/random/800x600/?apartments&{{ $apartamento->Nombre_Apto }}" alt="{{ $apartamento->Nombre_Apto }}"/>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $apartamento->Nombre_Apto }}
                        <div class="badge badge-secondary text-xs">New</div>
                    </h2> 
                    <p>{{ $apartamento->Ubicacion_Descripcion }}</p>
                </div>  
            </div>
        @endforeach
    </div>
@endsection