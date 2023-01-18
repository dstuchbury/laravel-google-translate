<?php

namespace DStuchbury\GoogleTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DStuchbury\GoogleTranslate\GoogleTranslate
 */
class GoogleTranslateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-google-translate';
    }
}
