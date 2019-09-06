<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function Novia(){
        return view('Novia');
    }

    public function noticias(){
        return view('blog');
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
