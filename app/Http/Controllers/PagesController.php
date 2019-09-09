<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Invoca los modelos creados (Nota.php)
use App;

class PagesController extends Controller
{
    public function inicio(){
        // Invoca todos los elementos de la DB
        $notas = App\Nota::all();
        return view('welcome', compact('notas'));
        //return view('welcome');
    }

    public function Novia(){
        return view('Novia');
    }

    public function noticias(){
        return view('blog');
    }

    public function detalle($id){
        // validación de existencia de id, caso contrario error 404
        $nota = App\Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function fotos(){
        return view('fotos');
    }

    public function nosotros($nombre =null){

        //Array de equipo (Database)
        $equipo = ['Alejandro', 'García', 'Cetina'];

        // mandar array asociativo, toma el nombre y se asocia el array equipo
        return view('nosotros', ['equipo'=> $equipo, 'nombre' => $nombre]);
    
    }
}
