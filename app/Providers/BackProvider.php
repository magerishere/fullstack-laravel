<?php

namespace App\Providers;

use App\Services\Menu\MenuService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BackProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $menuService = new MenuService();
        View::share([
            'menus' => $menuService->getMenus(),
        ]);
    }
}
