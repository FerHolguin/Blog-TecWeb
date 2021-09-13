<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nombre = 'Fernanda';
    
        return view('index')
        -> with('nombre' , $nombre);
        
    }

    public function detalle(){
        $nombre = 'Fernanda';
        $apellido = 'Holguin';
        $tel = '477 123 1234';
        $email = 'fer@gmail.com';

        return view('detalle')
        -> with('nombre' , $nombre)
        -> with('apellido' , $apellido)
        -> with('tel' , $tel)
        -> with('email' , $email);
    }
}
