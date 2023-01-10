<?php

use Illuminate\Support\Facades\App;
use App\Enums\UserPermissionEnums;

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

if (!function_exists('getGuards')) {
    function getGuards()
    {
        $guards = config('auth.guards');

        return array_keys($guards);
    }
}

if (!function_exists('getSuperAdminPermissions')) {
    function getSuperAdminPermissions()
    {
        return UserPermissionEnums::asArray();
    }
}

if (!function_exists('getAdminPermissions')) {
    function getAdminPermissions()
    {
        return [
            UserPermissionEnums::USER_CREATE,
            UserPermissionEnums::USER_READ,
            UserPermissionEnums::USER_UPDATE,
            UserPermissionEnums::USER_ACTIVATOR,
            UserPermissionEnums::BLOG_CATEGORY_CREATE,
            UserPermissionEnums::BLOG_CATEGORY_READ,
            UserPermissionEnums::BLOG_CATEGORY_UPDATE,
            UserPermissionEnums::BLOG_CATEGORY_ACTIVATOR,
            UserPermissionEnums::BLOG_CREATE,
            UserPermissionEnums::BLOG_READ,
            UserPermissionEnums::BLOG_UPDATE,
            UserPermissionEnums::BLOG_ACTIVATOR,
        ];
    }
}

if (!function_exists('getAuthorPermissions')) {
    function getAuthorPermissions()
    {
        return [
            UserPermissionEnums::USER_CREATE,
            UserPermissionEnums::USER_READ,
            UserPermissionEnums::USER_UPDATE,
            UserPermissionEnums::BLOG_CATEGORY_CREATE,
            UserPermissionEnums::BLOG_CATEGORY_READ,
            UserPermissionEnums::BLOG_CATEGORY_UPDATE,
            UserPermissionEnums::BLOG_CREATE,
            UserPermissionEnums::BLOG_READ,
            UserPermissionEnums::BLOG_UPDATE,
        ];
    }
}

if (!function_exists('getCustomerPermissions')) {
    function getCustomerPermissions()
    {
        return [
            UserPermissionEnums::USER_CREATE,
            UserPermissionEnums::USER_READ,
            UserPermissionEnums::USER_UPDATE,
        ];
    }
}

if (!function_exists('getMemberPermissions')) {
    function getMemberPermissions()
    {
        return [
            UserPermissionEnums::BLOG_READ,
        ];
    }
}
