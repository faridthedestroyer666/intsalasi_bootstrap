<?php
namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouterServiceProvider as ServiceProvider;

class RouterServiceProvider extends ServiceProvider
{
    /**
     * 
     * @return void
     */
    public function boot()
    {
        Route::pattern('id','[0-9]+');
        parent::boot();
    }
}