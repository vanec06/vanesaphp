@extends('layout.app')

@section('titulo')
Registrar Usuario
@endsection

@section('contenido')
<div class="flex justify-center">
    <div class="w-96 flex justify-center">
      <form method="post" class="w-96 flex flex-col p-3">
        @csrf

        <div class="flex mb-3">
          <div class="w-1/2 pr-2 ">
              <label class="p-3" for="name">Nombre:</label>
              <input type="text" id="name" name="name" class="border border-gray-400 p-2 rounded-md" required>
              @error('name')
                  <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
              @enderror
          </div>
          <div class="w-1/2 pl-2">
              <label class="p-3" for="lastname">Apellido:</label>
              <input type="text" id="lastname" name="lastname" class="border border-gray-400 p-2 rounded-md" required>
              @error('lastname')
                  <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
              @enderror
          </div>
      </div>

        <label class="p-3" for="email">Email:</label>
        <input type="text" id="email" name="email" class="border border-gray-400 p-2 rounded-md" required>
        @error('email')
            <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
        @enderror

       
        <select value="" class="border border-gray-400 p-2 rounded-md mt-10">
            <option name="" id="">Seleccione una rol</option>
            <option name="" id="" value="admin">Administrador</option>
            <option name="" id="" value="teacher">Profesor</option>
            <option name="" id="" value="student">Estudiante</option>
        </select>
        @error('rol')
            <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
        @enderror
        <label class="p-4 " for="identification">Identificación:</label>
        <input type="text" id="identification" name="identification" class="border border-gray-400 p-2 rounded-md" required>
        @error('identification')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror

    <div class="flex mb-4">
         <div class="w-1/2 pr-2">
        <label class="p-3" for="phone">Teléfono:</label>
        <input type="tel" id="phone" name="phone" class="border border-gray-400 p-2 rounded-md" required>
        @error('phone')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror
         </div>
         <div class="w-1/2 pl-2">
        <label class="p-3" for="address">Dirección:</label>
        <input type="text" id="address" name="address" class="border border-gray-400 p-2 rounded-md" required>
        @error('address')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror
            </div>
      </div>
        <button type="submit" class="mt-10 p-3 bg-green-500 hover:bg-green-400 text-white py-2 px-4 rounded-md ">Registrar</button>

      </form>
    </div>
  </div>


@endsection
