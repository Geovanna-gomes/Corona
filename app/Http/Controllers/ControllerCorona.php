<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCorona extends Controller
{
    public function home(){
        return view('home');
    }

    public function sobre (){
        return view ('Sobre');
    }

    public function cidades (){
        return view ('Cidades');
    }

    public function links (){
        return view ('Links');
    }

    public function contatoinfo (){
        return view ('ContatoeInformações');
    }

    public function prevenção (){
        return view ('Prevenção');
    }
}
