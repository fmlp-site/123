<?php

namespace Concursos\Http\Controllers;

use Illuminate\Http\Request;
use Concursos\Modules\CandidatosInterface;
use Concursos\Http\Requests\CandidatoRequest;

class CandidatosController extends Controller
{
    private $moduloCandidatos;
    public function __construct(CandidatosInterface $moduloCandidatos) {
        $this->moduloCandidatos = $moduloCandidatos;
    }
    
    public function carregarViewCadastrar() {
       return view('candidatos.cadastro');
    }
        
    public function cadastrar(CandidatoRequest $request) {
        $this->moduloCandidatos->cadastrarOuAtualizar($request->all());
    }
}