@extends('layouts.app')

@section('titulo')
    Registrate!
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/user.jpg') }}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" >Nombre</label>
                    <input type="text" id="name" name="name" placeholder="name" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror " value="{{ old('name') }}">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="apellido" class="mb-2 block uppercase text-gray-500 font-bold" >Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="apellido" class="border p-3 w-full rounded-lg @error('apellido') border-red-500 @enderror " value="{{ old('apellido') }}">
                    @error('apellido')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold" >Cedula</label>
                    <input type="number" id="cedula" name="cedula" placeholder="cedula" class="border p-3 w-full rounded-lg @error('cedula') border-red-500 @enderror " value="{{ old('cedula') }}">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="fecha" class="mb-2 block uppercase text-gray-500 font-bold" >Fecha</label>
                    <input type="Date" id="fecha" name="fecha" placeholder="fecha" class="border p-3 w-full rounded-lg @error('fecha') border-red-500 @enderror " value="{{ old('fecha') }}">
                    @error('fecha')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="competencia" class="mb-2 block uppercase text-gray-500 font-bold" >competencia</label>
                    <input type="text" id="competencia" name="competencia" placeholder="competencia" class="border p-3 w-full rounded-lg @error('competencia') border-red-500 @enderror " value="{{ old('competencia') }}">
                    @error('competencia')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-5">
                    <label for="horario" class="mb-2 block uppercase text-gray-500 font-bold" >horario</label>
                    <input type="text" id="horario" name="horario" placeholder="horario" class="border p-3 w-full rounded-lg @error('horario') border-red-500 @enderror " value="{{ old('horario') }}">
                    @error('horario')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="idficha" class="mb-2 block uppercase text-gray-500 font-bold" >idficha</label>
                    <input type="number" id="idficha" name="idficha" placeholder="idficha" class="border p-3 w-full rounded-lg @error('idficha') border-red-500 @enderror " value="{{ old('idficha') }}">
                    @error('idficha')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                

                <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form> 
        </div>
    </div>
@endsection
