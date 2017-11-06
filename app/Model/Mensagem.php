<?php
namespace App\Model;
use App\Model\Visitante;

class Mensagem {
    private $id;
    private $uuid;
    private $conteudo;
    private $dataMensagem;
    private $visitante;

    public function __construct(
        string $conteudo,  Visitante $visitante) {
        
            $this->conteudo = $conteudo;
            $this->visitante = $visitante;  
    }    

    public function setId(string $id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setUuid(string $uuid) {
        $this->uuid = $uuid;
    }

    public function getUuid() {
        return $this->uuid;
    }
    
    public function getConteudo() {
        return $this->conteudo;
    }

    public function setConteudo(string $conteudo) {
        $this->conteudo = $conteudo;
    }

    public function getDataMensagem() {
        return $this->dataMensagem;
    }

    public function setDataMensagem(\DataMensagem $dataMensagem) {
        $this->dataMensagem= $dataMensagem;
    }

    public function getVisitante() {
        return $this->visitante;
    }

    public function setVisitante(Visitante $visitante) {
        $this->visitante = $visitante;
    }
}