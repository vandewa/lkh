<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ComCode;
use App\Models\User;
use App\Models\Aktifitas;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $tema = ComCode::where('code_cd', 'TEMA_01')->first();
        $tema = $tema->code_nm;
        View::share('tema', $tema);

        if (env('APP_ENV') != 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }
    }
}
