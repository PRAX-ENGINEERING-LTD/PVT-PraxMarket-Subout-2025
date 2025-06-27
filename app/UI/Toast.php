<?php

namespace App\UI;

use RuntimeException;

class Toast {
    
    public $type;
    public $message;
    
    public function __set($propertyName, $propertyValue) {
        throw new RuntimeException("Invalid values assinged to Toast");
    }

}
