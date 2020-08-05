<?php

namespace Venoudev\Results\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Artisan;
use Venoudev\Results\Contracts\Result;
use Venoudev\Results\ResultImpl;
use Venoudev\Results\Contracts\Error;
use Venoudev\Results\ErrorImpl;
use Venoudev\Results\Contracts\Message;
use Venoudev\Results\MessageImpl;
use Venoudev\Results\Contracts\ResultManager;
use Venoudev\Results\ResultManagerImpl;
use Venoudev\Results\Commands\InstallResourcesCommand;
use Venoudev\Results\Commands\ValidatorMakeCommand;
use Venoudev\Results\Commands\ServiceImplMakeCommand;
use Venoudev\Results\Commands\ServiceContractMakeCommand;
use Venoudev\Results\Commands\ActionMakeCommand;
use Illuminate\Support\Facades\App;

class ResultsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {   

        App::bind('resultManager', function()
        {   
            return App::make(ResultManager::class);

        });

        $this->registerCollectionPaginated();

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../resources/lang' => resource_path('/lang'),
        ],'results-resources');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallResourcesCommand::class,
                ValidatorMakeCommand::class,
                ServiceImplMakeCommand::class,
                ActionMakeCommand::class,
                ServiceContractMakeCommand::class,
            ]);
        }
        
        $this->app->singleton(ResultManager::class, ResultManagerImpl::class);
        $this->app->bind(Result::class, ResultImpl::class);
        $this->app->bind(Message::class, MessageImpl::class);
        $this->app->bind(Error::class, ErrorImpl::class);

      
    }

    public function registerCollectionPaginated(){
        
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
              $this->forPage($page, $perPage),
              $total ?: $this->count(),
              $perPage,
              $page,
              [
                'path' => LengthAwarePaginator::resolveCurrentPath(),
                'pageName' => $pageName,
              ]
            );
        });
    }
}
