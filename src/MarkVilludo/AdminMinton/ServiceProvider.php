<?php 

namespace MarkVilludo\AdminMinton;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use MarkVilludo\AdminMinton\AdminMinton;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {      
        //publish all assets of admin minton hr dark
         $this->publishes([
           __DIR__.'/assets' => public_path('/'),
        ],'assets');
        //end

        //publish views to resource path
        $this->publishes([
           __DIR__.'/views' => resource_path('/views'),
        ],'views');
        //end

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      
    }

}
