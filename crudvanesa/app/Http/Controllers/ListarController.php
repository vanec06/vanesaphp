<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = User::all();

        return view('auth.listar', ['usuarios' => $usuarios]);
    }

    public function mostrarFormularioActualizar($id)
    {
        $usuario = User::find($id);

        return view('auth.editar', ['usuario' => $usuario]);
    }

    public function actualizarUsuario(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|min:10|int',
            'fecha' => 'required|Date|max:30',
            'competencia' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'idficha' => 'required|string|max:20',
        ]);

        $usuario = User::find($id);

        $usuario->update([
            'name' => $request->input('name'),
            'apellido' => $request->input('apellido'),
            'cedula' => $request->input('cedula'),
            'fecha' => $request->input('fecha'),
            'competencia' => $request->input('competencia'),
            'horario' => $request->input('horario'),
            'idficha' => $request->input('idficha'),
        ]);

        return redirect()->route('listar');
    }
    public function eliminar($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('listar');
    }

    // Generar PDF
    public function pdf($id)
    {
        $userFind = User::find($id);
        // die($userFind);
        $pdf = PDF::LoadView('auth.pdf', compact("userFind"));
        

        return $pdf->stream();
    }

        // Generar PDF
        public function  pdft()
        {
            // Obtener todos los usuarios
            $userFindall = User::get();
         
    
            // Cargar la vista y pasar los usuarios
            $pdft = PDF::loadView('auth.pdft', compact("userFindall"));
    
            // Enviar el PDF al navegador
            return $pdft->stream();
        }
}
