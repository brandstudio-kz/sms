<?php

namespace BrandStudio\Sms\Facades;

use Illuminate\Support\Facades\Facade;

class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'brandstudio_sms';
    }

}
