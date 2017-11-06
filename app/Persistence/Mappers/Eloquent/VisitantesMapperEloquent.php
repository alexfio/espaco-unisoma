<?php
namespace App\Persistence\Mappers\Eloquent;
use App\Persistence\Mappers\VisitantesMapper;
use App\Model\Mensagem;
use App\Model\Visitante;
use App\Persistence\Mappers\Eloquent\Model\Visitante as VisitanteEloquent ; 
use App\Persistence\Mappers\Eloquent\Model\Mensagem as MensagemEloquent;
use Ramsey\Uuid\Uuid;

class VisitantesMapperEloquent implements VisitantesMapper {
    public function save(Visitante $visitante) : void {
        $visitante->setUuid(Uuid::uuid4()->toString());
        $mensagem = $visitante->getMensagens()[0];
        $mensagem->setUuid(Uuid::uuid4()->toString());
        
        $eloVisitante = new VisitanteEloquent();
        $eloVisitante->uuid = $visitante->getUuid();
        $eloVisitante->nome = $visitante->getNome();
        $eloVisitante->sobrenome = $visitante->getSobrenome();
        $eloVisitante->email = $visitante->getEmail();
        $eloVisitante->telefone = $visitante->getTelefone();
        
        $eloMensagem = new MensagemEloquent(); 
        $eloMensagem->uuid = $mensagem->getUuid();
        $eloMensagem->conteudo = $mensagem->getConteudo();
        
        $eloVisitante->save();
        $eloVisitante->mensagens()->save($eloMensagem);

    }
}
