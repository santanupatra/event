<?php

namespace App\Model\Entity;



use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity {

    // Code from bake.

    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];    
    
    
    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }



}
