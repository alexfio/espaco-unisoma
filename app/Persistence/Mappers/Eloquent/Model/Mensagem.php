<?php

namespace App\Persistence\Mappers\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;
use App\Persistence\Mappers\Eloquent\Model\Visitante;

class Mensagem extends Model
{
    public function visitante() {
        return $this->belongsTo(Visitante::class, 'visitante_id', 'id');
    }
}
