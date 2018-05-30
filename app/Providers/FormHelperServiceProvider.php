<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\App;

class FormHelperServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        parent::register();

        foreach (glob(app_path('Http/Helpers/*.php')) as $filename) {
            require_once($filename);
        }
    
        App::bind('FormHelper', function()
        {
            return new \App\Http\Helpers\FormHelper;
        });
    }


}
