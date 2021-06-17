<?php

namespace Dofapp\Larapp;

use Illuminate\Support\Facades\Facade;

class LarappFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'larapp';
    }
}
