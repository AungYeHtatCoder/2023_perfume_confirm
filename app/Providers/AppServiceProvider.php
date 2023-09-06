<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use App\Models\Admin\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
        $carts = Auth::check() ? Cart::where('user_id', Auth::id())->get() : null;
        $view->with('carts', $carts);
        Paginator::useBootstrap();
    });
    }
}