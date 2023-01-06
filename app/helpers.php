<?php

use Illuminate\Support\Facades\App;

if (!function_exists('getLocale')) {
    function getLocale()
    {
        return App::currentLocale();
    }
}

if (!function_exists('getDirection')) {
    function getDirection()
    {
        return match (getLocale()) {
            'en' => 'ltr',
            'fa' => 'rtl',
            default => 'rtl',
        };
    }
}

if (!function_exists('isRtl')) {
    function isRtl()
    {
        return getDirection() === 'rtl';
    }
}
