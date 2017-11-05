<?php
namespace App\Persitence\Mappers;
use App\Model\Visitante;

interface VisitantesMapper {
    public function save(Visitante $visitante);
}