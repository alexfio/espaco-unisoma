<?php

namespace App\Persistence\Mappers\Eloquent;
use App\Persistence\Mappers\MensagensMapper;
use App\Persistence\Mappers\VisitantesMapper;
use App\Persistence\PersistenceMachine;
use App\Persistence\Mappers\Eloquent\MensagensMapperEloquent;
use App\Persistence\Mappers\Eloquent\VisitantesMapperEloquent;
use Illuminate\Support\Facades\DB;

class PersistenceMachineEloquent implements PersistenceMachine {

    public function __construct() {
        DB::beginTransaction();        
    }

    public function getMensagensMapper() : MensagensMapper {
        return new MensagensMapperEloquent();
    }
    
    public function getVisitantesMapper() : VisitantesMapper {
        return new VisitantesMapperEloquent();
    }
    
    public function commit($encerrar = false) : void {
        if(!$encerrar) {
            DB::commit();
            DB::beginTransaction();
        }
        else {
            DB::commit();
        }
    }
}