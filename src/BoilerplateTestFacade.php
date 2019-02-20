<?php

namespace DevelopingSonder\BoilerplateTest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DevelopingSonder\BoilerplateTest\Skeleton\SkeletonClass
 */
class BoilerplateTestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'boilerplate-test';
    }
}
