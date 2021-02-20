<?php

namespace Kkobold\DevHelper;

use Kkobold\DevHelper\Commands\Clear;
use Kkobold\DevHelper\Commands\Helper;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Clear::class,
                Helper::class,
            ]);
        }
    }
}
