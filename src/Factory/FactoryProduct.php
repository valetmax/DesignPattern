<?php

namespace App\Factory;

use App\Products;

class Meuble extends AbrstractProduct {
    
    /**
     * Undocumented function
     *
     * @param [type] $className
     * @return void
     */
    public static function create($className): AbstractProduct{
        if ($className === Fruit::class) {
            return new Fruit();
        } else if($className === Meuble::class) {
            return new Meuble();
        } else return null;
    }
}