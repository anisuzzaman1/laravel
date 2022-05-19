<?php

namespace App\repos;

use Illuminate\Support\Facades\Facade;

class GetClass extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'calc';
    }
}
