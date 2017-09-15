<?php

namespace AVD\Providers\Site;

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
        $models = array(
            'ConfigProduct',
            'Section',
            'Category',
            'Product',
            'Brand'
        );
        foreach ($models as $model) {
            $this->app->bind("AVD\Interfaces\Frontend\\{$model}Interface", "AVD\Repositories\Frontend\\{$model}Repository");
        }    
    }
}