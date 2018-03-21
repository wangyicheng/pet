<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ArchitectureServiceProvider extends ServiceProvider
{
   /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {

    }

   /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        $this->app->bind(\App\Repository\Contracts\FoodCategoryRepository::class, \App\Repository\Eloquent\FoodCategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Contracts\FoodRepository::class, \App\Repository\Eloquent\FoodRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Contracts\ZooRepository::class, \App\Repository\Eloquent\ZooRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Contracts\GeneRepository::class, \App\Repository\Eloquent\GeneRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Contracts\ZooBoxRepository::class, \App\Repository\Eloquent\ZooBoxRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Contracts\ZooFeedingRepository::class, \App\Repository\Eloquent\ZooFeedingRepositoryEloquent::class);
        $this->app->bind(\App\Repository\Contracts\ZooGrowthRepository::class, \App\Repository\Eloquent\ZooGrowthRepositoryEloquent::class);
        //end-binding
    }
}