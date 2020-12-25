<?php

namespace Modules\Api\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Api\Contracts\Securities\AuthenticationManager;
use Modules\Api\Contracts\Services\AuthService;
use Modules\Api\Contracts\Services\UserService;
use Modules\Api\Securities\Authentications\BasicAuthenticationManager;
use Modules\Api\Services\AuthServiceImpl;
use Modules\Api\Services\UserServiceImpl;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(AuthService::class, AuthServiceImpl::class);
        $this->app->bind(AuthenticationManager::class, BasicAuthenticationManager::class);
    }
}
