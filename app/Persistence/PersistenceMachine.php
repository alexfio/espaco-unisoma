<?php

namespace App\Persistence;
use App\Persistence\Mappers\MensagensMapper;
use App\Persistence\Mappers\VisitantesMapper;

interface PersistenceMachine {
    public function getMensagensMapper() : MensagensMapper;
    public function getVisitantesMapper() : VisitantesMapper;
    public function commit($encerrar = false) : void;
}