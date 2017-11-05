<?php

namespace App\Persitence;
use App\Persitence\Mappers\MensagensMapper;
use App\Persitence\Mappers\VisitantesMapper;

interface PersistenceMachine {
    public function getMensagensMapper() : MensagensMapper;
    public function getVisitantesMapper() : VisitantesMapper;
    public function commit(boolean $encerrar) : void;
}