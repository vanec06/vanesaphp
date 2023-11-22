<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {



        $this->validate($request, [
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|min:10|int',
            'fecha' => 'required|Date|max:30',
            'competencia' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'idficha' => 'required|string|max:20',
        ]);

        User::create([

            'name' => $request->name,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'fecha' => $request->fecha,
            'competencia' => $request->competencia,
            'horario' => $request->horario,
            'idficha' => $request->idficha

        ]);


        //Redireccionar
        return redirect()->route('register');


    }
    

}
