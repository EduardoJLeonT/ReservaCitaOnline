@extends('layouts.app')
@section('titulo', 'Modelos apartamentos')
@section('contenido')

<div class="flex justify-start m-6">
    <a href="{{ route('apartamentos.create') }}" class="bg-orange-500 text-white font-semibold px-4 py-2 mt-4 rounded hover:bg-green-800 transition duration-200">Crear Producto</a>
</div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
        @foreach ($apartamentos as $apartamento)
            <div class="card w-60 bg-base-100 shadow-xl">
                <figure>
                    <img src="https://picsum.photos/800/600?random={{ $apartamento->id }}&category=architecture" alt="{{ $apartamento->nombre }}" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $apartamento->nombre }}
                        <div class="badge badge-secondary text-xs">New</div>
                    </h2> 
                    <p><span class="font-semibold">Ubicación:</span> {{ $apartamento->ubicacion }}</p>
                    <p><span class="font-semibold">Descripcion:</span>{{ $apartamento->descripcion }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('apartamentos.edit', $apartamento->id)}}" class="btn btn-xs btn-secondary">Editar</a>
                        <form action="{{ route('apartamentos.destroy', $apartamento->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <Button type="submit" class="btn btn-xs btn-error">Eliminar</Button>
                        </form>
                    </div>
                </div>  
            </div>
        @endforeach
    </div>
@endsection