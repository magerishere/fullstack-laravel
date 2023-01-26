<?php

namespace App\Services\Menu;

class MenuService
{
    public function getMenus()
    {
        return [
            [
                'title' => 'لیست کاربران',
                'icon' => 'fa fa-dashboard',
                'submenus' => [
                    [
                        'title' => 'لیست کاربران',
                        'route' => route('admin.users.index')
                    ],
                    [
                        'title' => 'ایجاد کاربر',
                        'route' => route('admin.users.create'),
                    ]

                ],
            ]
        ];
    }
}
