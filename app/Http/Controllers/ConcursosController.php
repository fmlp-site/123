<?php

namespace Concursos\Http\Controllers;

use Illuminate\Http\Request;

class ConcursosController extends Controller
{
    //Carrega a tela de concursos
    public function index() {
        return view('concursos.index');
    }
}
