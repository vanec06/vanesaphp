@extends('layouts.app')

@section('titulo')
    Actualizar Usuario
@endsection

@section('contenido')
    <div class="container mx-auto mt-5 p-5">
        <h1 class="text-3xl font-bold mb-6">Actualizar Usuario</h1>

        <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $usuario->apellido) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('apellido')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="cedula" class="block text-gray-700 text-sm font-bold mb-2">Cédula:</label>
                <input type="number" id="cedula" name="cedula" value="{{ old('cedula', $usuario->cedula) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('cedula')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha:</label>
                <input type="date" id="fecha" name="fecha"
                    value="{{ old('Fecha', $usuario->Fecha) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('fecha')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="competencia" class="block text-gray-700 text-sm font-bold mb-2">Competencia:</label>
                <input type="text" id="competencia" name="competencia" value="{{ old('competencia', $usuario->competencia) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('competencia')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="horario" class="block text-gray-700 text-sm font-bold mb-2">Horario:</label>
                <input type="text" id="horario" name="horario" value="{{ old('horario', $usuario->horario) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('horario')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="idficha" class="block text-gray-700 text-sm font-bold mb-2">Id_ficha:</label>
                <input type="number" id="idficha" name="idficha" value="{{ old('idficha', $usuario->idficha) }}"
                    class="border-2 border-gray-300 p-2 w-full rounded">
                    @error('idficha')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-5 ">
                <div class="flex items-center">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">Actualizar Usuario</button>
                </div>
        
            </div>
        </form>
    </div>
@endsection
