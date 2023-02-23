<?php
namespace Newindianic\PackageDemo;

use Newindianic\PackageDemo\Nova\Resources\Article;
use Newindianic\PackageDemo\Nova\Resources\Comment;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class PackageDemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::resources([
                Article::class,
                Comment::class,
            ]);
        });

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
