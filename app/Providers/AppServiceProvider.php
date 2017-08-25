<?php

namespace AVDPainel\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{

    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Padrão enquanto estiver executando uma versão menor que MySQL v5.7
        //Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $models = array(
            'ConfigKit',
            'ConfigBrand',
            'ConfigPrice',
            'ConfigModule',
            'ConfigSystem',
            'ConfigProfile',
            'ConfigProduct',
            'ConfigFreight',
            'ConfigPercent',
            'ConfigKeyword',
            'ConfigSection',
            'ConfigCategory',
            'ConfigShipping',
            'ConfigColorGroup',
            'ConfigPermission',
            'ConfigUnitMeasure',
            'ConfigImageProduct',
            'AdminPermission',
            'AdminAccess',
            'Admin',
            'State',
            'Brand',
            'Section',
            'Category',
            'Product',
            'GroupColor',
            'GridBrand',
            'GridSection',
            'GridCategory',
            'GridProduct',
            'ProductPrice',
            'ImageBrand',
            'ImageSection',
            'ImageCategory',
            'ImageColor',
            'ImagePosition'
        );

        foreach ($models as $model) {
            $this->app->bind("AVDPainel\Interfaces\Admin\\{$model}Interface", "AVDPainel\Repositories\Admin\\{$model}Repository");
        }    
    }
}
