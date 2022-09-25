<?php

namespace App\Providers;

use App\Interfaces\AdsRepositoryInterface;
use App\Interfaces\AdsSubscriptionRepositoryInterface;
use App\Interfaces\Auth\RoleRepositoryInterface;
use App\Interfaces\Auth\UserRepositoryInterface;
use App\Interfaces\BaseEloquentInterface;
use App\Interfaces\BillBoardRepositoryInterface;
use App\Interfaces\Blog\BlogRepositoryInterface;
use App\Interfaces\TransactionRepositoryInterface;
use App\Repositories\AdsRepository;
use App\Repositories\AdsSubscriptionRepository;
use App\Repositories\Auth\RoleRepository;
use App\Repositories\Auth\UserRepository;
use App\Repositories\BaseEloquentRepository;
use App\Repositories\BillBoardRepository;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\TransactionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseEloquentInterface::class,BaseEloquentRepository::class);
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class,RoleRepository::class);
        $this->app->bind(BlogRepositoryInterface::class,BlogRepository::class);
        $this->app->bind(AdsRepositoryInterface::class,AdsRepository::class);
        $this->app->bind(BillBoardRepositoryInterface::class,BillBoardRepository::class);
        $this->app->bind(AdsSubscriptionRepositoryInterface::class,AdsSubscriptionRepository::class);
        $this->app->bind(TransactionRepositoryInterface::class,TransactionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
