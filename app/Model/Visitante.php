<?php
namespace App\Model;
use App\Model\Mensagem;

class Visitante {
    private $id;
    private $uuid;
    private $nome;
    private $sobrenome;
    private $telefone;
    private $mensagens;

    public function __construct($nome, $sobrenome) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->mensagens = [];
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

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSobrenome(string $sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setTelefone(string $telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function addMensagem(Mensagem $msg) {
        array_push($this->mensagens, $msg);
    }

    public function getMensagens() {
        return $this->mensagens;
    }
}