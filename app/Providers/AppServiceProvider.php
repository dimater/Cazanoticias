<?php

namespace App\Providers;

use App\Domain\Contracts\ClientContract;
use App\Domain\Repositories\ClientRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ClientContract::class, ClientRepository::class);
    }
}
