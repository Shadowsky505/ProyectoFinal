<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Restaurante;
use App\Models\User;

class InicioController extends Controller
{
    public function inicio()
    {
        $restaurantes=Restaurante::all();
        $users=User::where('role','admin')->get();
        return view('paginaInicio',compact('restaurantes',"users"));
    }
    public function inicio2()
    {
        $restaurantes=Restaurante::all();
        $users=User::where('role','admin')->get();
        return view('inicio2',compact('restaurantes',"users"));
    }
}
