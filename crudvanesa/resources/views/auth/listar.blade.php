@extends('layouts.app')

@section('titulo')
    Lista de Usuarios
@endsection

@section('contenido')
    <div class="container mx-auto mt-5 p-5">
        <h1 class="text-3xl font-bold mb-6">Lista de Usuarios</h1>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-3 px-4 border-b border-gray-300">Nombre</th>
                        <th class="py-3 px-4 border-b border-gray-300">Apellido</th>
                        <th class="py-3 px-4 border-b border-gray-300">Cédula</th>
                        <th class="py-3 px-4 border-b border-gray-300">fecha</th>
                        <th class="py-3 px-4 border-b border-gray-300">Competencia</th>
                        <th class="py-3 px-4 border-b border-gray-300">Horario</th>
                        <th class="py-3 px-4 border-b border-gray-300">Id_ficha</th>
                        <th class="py-3 px-4 border-b border-gray-300">Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->name }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->apellido }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->cedula }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->fecha }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->competencia }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->horario }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 text-center">{{ $usuario->idficha }}</td>
                            <td class="py-3 px-4 border-b border-gray-300 flex gap-2 text-center">

                                <a href="{{ route('editar', $usuario->id) }}" class="bg-green-500 text-white p-2 rounded">Actualizar</a>
                                <form action="{{ route('eliminar', $usuario->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-500 text-white p-2 rounded">Eliminar</button>
                                </form>
                                <div class="flex items-center">
                                    <a href="{{ route('pdf', [$usuario->id]) }}">
                                        <button type="button" class="bg-blue-500 text-white p-2 rounded">Cargar PDF</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container mx-auto mt-5 p-5">
        <a href="{{ route('pdft', [$usuario->id]) }}">
        <button type="button" class="bg-blue-500 text-white p-2 rounded">Cargar PDF</button></a>
        </div>
@endsection
