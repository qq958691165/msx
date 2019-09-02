<?php

namespace Msx;

use Illuminate\Support\ServiceProvider;

class MsxProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Msx'); // 视图目录指定
        $this->publishes([
            __DIR__.'/config/msx.php' => config_path('msx.php'), // 发布配置文件到 laravel 的config 下
            __DIR__.'/assets' => public_path('msx_assets'), // 发布前端资源文件到 laravel 的public/msx_assets 下
            __DIR__.'/database/migrations' => database_path('migrations'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //load config
        $config=array_merge(include __DIR__.'/config/msx.php',config('msx',[]));
        config()->set('msx',$config);
    }
}
