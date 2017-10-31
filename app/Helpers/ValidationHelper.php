<?php
namespace App\Helpers;

class ValidationHelper {
    public function telefoneEhValido($telefone) {
        
        if(empty($telefone) || \preg_match("/^\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}$/", $telefone))
            return true;
        
        return false;
    }
}