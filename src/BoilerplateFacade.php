<?php

namespace M1guelpf\Boilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \M1guelpf\Boilerplate\Skeleton\SkeletonClass
 */
class BoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'boilerplate';
    }
}
