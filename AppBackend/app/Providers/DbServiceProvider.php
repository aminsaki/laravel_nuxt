<?php

namespace App\Providers;

use App\DB\base\BaseInterface;
use App\DB\base\BaseRepostor;
use App\DB\Users\InterfaceUser;
use App\DB\Users\UserRepostory;
use Illuminate\Support\ServiceProvider;

class DbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(BaseInterface::class, BaseRepostor::class);
        $this->app->bind(InterfaceUser::class, UserRepostory::class);
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
