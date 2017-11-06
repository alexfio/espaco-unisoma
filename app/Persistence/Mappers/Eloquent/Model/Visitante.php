<?php

namespace App\Persistence\Mappers\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;
use App\Persistence\Mappers\Eloquent\Model\Mensagem;

class Visitante extends Model
{
   public function mensagens() {
       return $this->hasMany(Mensagem::class, 'visitante_id', 'id');
   }
}
