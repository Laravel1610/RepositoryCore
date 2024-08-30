<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The repository interfaces we want to bind.
     *
     * @var array
     */
    protected $repositories = [
        \App\Repositories\Interfaces\UserRepositoryInterface::class => \App\Repositories\UserRepository::class,
        // Thêm các repository khác ở đây
        // \App\Repositories\Interfaces\ProductRepositoryInterface::class => \App\Repositories\ProductRepository::class,
        // \App\Repositories\Interfaces\OrderRepositoryInterface::class => \App\Repositories\OrderRepository::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->bindRepositories();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Bind all repositories.
     */
    private function bindRepositories(): void
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
