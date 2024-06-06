@extends('layouts.app')
@section('titulo', 'Editar Apartamento')
@section('contenido')
    <div class="flex justify-center mt-24 mb-12">
        <div class="card w-96 bg-base-200 shadow-lg">
            <div class="card-body">
                <form action="{{ route('apartamentos.update', $apartamento->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="nombre" class="label">Nombre del Apartamento</label>
                        <input type="text" name="nombre" id="nombre" class="input input-bordered w-full" placeholder="Nombre del Apartamento" value="{{ $apartamento->nombre }}" required/>
                    </div>

                    <div class="mb-4">
                        <label for="ubicacion" class="label">Ubicación</label>
                        <input type="text" name="ubicacion" id="ubicacion" class="input input-bordered w-full" placeholder="Ubicación" value="{{ $apartamento->ubicacion }}" required/>
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="label">Descripcion apartamento</label>
                        <input type="text" name="descripcion" id="descripcion" class="input input-bordered w-full" placeholder="Descripción apartamento" value="{{ $apartamento->descripcion }}" />
                    </div>

                    <button type="submit" class="btn btn-primary w-full mb-4">Actualizar Apartamento</button>
                
                </form>
            </div>
        </div>
    </div>
@endsection