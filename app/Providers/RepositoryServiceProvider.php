<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{


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
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind(
            'App\Repositories\CompetenceRepository',
            'App\Repositories\Impl\CompetenceRepositoryImpl'
        );*/

    }
}