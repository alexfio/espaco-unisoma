<?php

namespace App\Persitence\Mappers\Eloquent;
use App\Persitence\Mappers\MensagensMapper;
use App\Persitence\Mappers\VisitantesMapper;
use App\Persitence\PersistenceMachine;

class PersistenceMachineEloquent implements PersistenceMachine {
    public function getMensagensMapper() : MensagensMapper {

    }
    
    public function getVisitantesMapper() : VisitantesMapper {

    }
    
    public function commit(boolean $encerrar) : void {
        
    }
}