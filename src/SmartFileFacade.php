<?php

namespace Nlrchudamani\SmartFile;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nlrchudamani\SmartFile\Skeleton\SkeletonClass
 */
class SmartFileFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'smartfile';
    }
}
