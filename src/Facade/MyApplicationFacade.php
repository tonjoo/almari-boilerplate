<?php

namespace MyProject\MyPackage\Facade;

use Tonjoo\Almari\Facade as Facade;

class MyApplication extends Facade{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    
     public static function getFacadeAccessor() { 
     	
     	return 'myApp';

     }

}