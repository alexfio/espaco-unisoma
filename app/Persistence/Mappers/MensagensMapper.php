<?php
namespace App\Persitence\Mappers;
use App\Model\Mensagem;

interface MensagensMapper {
    public function save(Mensagem $mensagem);
}