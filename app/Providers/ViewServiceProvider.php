<?php

namespace App\Providers;
use App\Http\View\Composers\ProfileComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
class ViewServiceProvider extends ServiceProvider
{
    public function register() { }

    public function boot()
    {
      View::composer(['profile', 'dashboard'], ProfileComposer::class);
    }
}

