<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgendamentoRequest;
use voku\helper\AntiXSS;

class AgendamentoController extends Controller
{
    public function agendar(AgendamentoRequest $request) {
        $antiXSS = new AntiXSS();
        
        $dados['nome'] = $antiXSS->xss_clean($request->input('nome'));
        $dados['sobrenome'] = $antiXSS->xss_clean($request->input('sobrenome'));
        $dados['email'] = $antiXSS->xss_clean($request->input('email'));
        $dados['telefone'] = $antiXSS->xss_clean($request->input('telefone'));
        $dados['mensagem'] = $antiXSS->xss_clean($request->input('mensagem'));
        
        
        
    }
}
