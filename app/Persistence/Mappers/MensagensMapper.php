<?php
namespace App\Persistence\Mappers;
use App\Model\Mensagem;

interface MensagensMapper {
    public function save(Mensagem $mensagem) : void;
}