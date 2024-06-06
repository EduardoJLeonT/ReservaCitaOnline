@extends('layouts.app')
@section('titulo', 'Crear Nuevo Apartamento')
@section('contenido')
    <div class="flex justify-center mt-24">
        <div class="card w-96 bg-base-200 shadow-lg">
            <div class="card-body">
                <form action="{{ route('apartamentos.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="nombre" class="label">Nombre del Apartamento</label>
                        <input type="text" name="nombre" id="nombre" class="input input-bordered w-full" placeholder="Nombre del Apartamento" required/>
                    </div>

                    <div class="mb-4">
                        <label for="ubicacion" class="label">Ubicación</label>
                        <input type="text" name="ubicacion" id="ubicacion" class="input input-bordered w-full" placeholder="Ubicación" required/>
                    </div>

                    <div class="mb-4">
                        <label for="descripcion" class="label">Descripcion apartamento</label>
                        <input type="text" name="descripcion" id="descripcion" class="input input-bordered w-full" placeholder="Descripción apartamento" />
                    </div>

                    <button type="submit" class="btn btn-primary w-full mb-4">Ingresar Apartamento</button>
                
                </form>
            </div>
        </div>
    </div>
@endsection
