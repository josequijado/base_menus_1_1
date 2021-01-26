<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use App\Models\GroupAndOption;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Collection::macro('hierarchy', function() {
            $grupos = $this->filter(function($cat) {
                if ($cat->type == 'G') {
                    return $cat;
                }
            });

            foreach ($grupos as $grupo) {
                $grupo->options = $this->filter(function ($cat) use ($grupo) {
                    return ($cat->parent_id == $grupo->id && $cat->type == "O");
                });
            }

            $grupos = $grupos->reject(function($grupo) {
                return $grupo->options->count() == 0;
            });
            return $grupos;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}


