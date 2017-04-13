<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         // mendaftarkan contact 
        
       $this->app->when('App\Http\Controllers\UserController')
            ->needs('App\Domain\Contracts\UsertInterface')
            ->give('App\Domain\Repositories\UserRepository');

       $this->app->when('App\Http\Controllers\MemberController')
            ->needs('App\Domain\Contracts\MemberInterface')
            ->give('App\Domain\Repositories\MemberRepository');

       $this->app->when('App\Http\Controllers\TransactionController')
            ->needs('App\Domain\Contracts\TransactionInterface')
            ->give('App\Domain\Repositories\TransactionRepository');
    }
}
