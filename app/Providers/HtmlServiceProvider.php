<?php namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Services\Html\FormBuilder;
use App\Services\Html\HtmlBuilder;

class HtmlServiceProvider extends ServiceProvider{


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
        $this->registerHtmlBuilder();
        $this->registerFormBuilder();
    }
    protected function registerHtmlBuilder()
    {
        $this->app->bind('html', function($app)
        {
            return new HtmlBuilder($app['url']);
        });
    }

    protected function registerFormBuilder()
    {
        $this->app->bind('form', function($app)
        {
            $form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

}
