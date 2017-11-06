<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgendamentoRequest;
use voku\helper\AntiXSS;
use App\Persistence\PersistenceMachine;
use App\Model\Visitante;
use App\Model\Mensagem;
use App\Http\Middleware\TrustProxies;

class AgendamentoController extends Controller
{
    private $persistence;
    public function __construct(PersistenceMachine $persistence) {
        $this->persistence = $persistence;
        
    }

    public function agendar(AgendamentoRequest $request) {
        $antiXSS = new AntiXSS();
        
        $dados['nome'] = $antiXSS->xss_clean($request->input('nome'));
        $dados['sobrenome'] = $antiXSS->xss_clean($request->input('sobrenome'));
        $dados['email'] = $antiXSS->xss_clean($request->input('email'));
        $dados['telefone'] = $antiXSS->xss_clean($request->input('telefone'));
        $dados['mensagem'] = $antiXSS->xss_clean($request->input('mensagem'));

        $visitante = new Visitante($dados['nome'], $dados['sobrenome']);
        $visitante->setEmail($dados['email']);
        $visitante->setTelefone($dados['telefone']);

        $mensagem = new Mensagem($dados['mensagem'], $visitante);
        $visitante->addMensagem($mensagem);

        $this->persistence->getVisitantesMapper()->save($visitante);
        $this->persistence->commit(true);

        //Enviar Email....    

        return redirect()
               ->action('PrincipalController@abrirAgendarConsulta')
               ->withInput(['sucesso' => true]);
               
        
        
    }
}
