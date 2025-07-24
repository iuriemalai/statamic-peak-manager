<?php

namespace IurieMalai\StatamicPeakManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IurieMalai\StatamicPeakManager\StatamicPeakManager
 */
class StatamicPeakManager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \IurieMalai\StatamicPeakManager\StatamicPeakManager::class;
    }
}
