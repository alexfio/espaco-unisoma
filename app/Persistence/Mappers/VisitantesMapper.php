<?php
namespace App\Persistence\Mappers;
use App\Model\Visitante;

interface VisitantesMapper {
    public function save(Visitante $visitante) : void;
}