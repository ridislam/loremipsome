<?php

namespace Ridislam\Loremipsome;

use Illuminate\Support\ServiceProvider;

class LoremServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/config' => config_path()], 'config');
    }

    /**
     * Make config publishing optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/lorem.php', 'lorem');
    }
}
