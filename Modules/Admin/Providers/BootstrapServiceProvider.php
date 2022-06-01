<?php

namespace Modules\Admin\Providers;

use App\Models\Order;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Contracts\Services\CategoryService;
use Modules\Admin\Contracts\Services\ContactService;
use Modules\Admin\Contracts\Services\ListAdminService;
use Modules\Admin\Contracts\Services\LoginService;
use Modules\Admin\Contracts\Services\OrderDetailService;
use Modules\Admin\Contracts\Services\OrderService;
use Modules\Admin\Contracts\Services\ProductService;
use Modules\Admin\Contracts\Services\UserService;
use Modules\Admin\Services\CategoryServicelmpl;
use Modules\Admin\Services\ContactServicelmpl;
use Modules\Admin\Services\ListAdminServicelmpl;
use Modules\Admin\Services\LoginServiceImpl;
use Modules\Admin\Services\OrderDetailServicelmpl;
use Modules\Admin\Services\OrderServicelmpl;
use Modules\Admin\Services\ProductServiceImpl;
use Modules\Admin\Services\UserServiceImpl;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ProductService::class, ProductServiceImpl::class);
        $this->app->bind(CategoryService::class, CategoryServicelmpl::class);
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(ContactService::class, ContactServicelmpl::class);
        $this->app->bind(OrderService::class, OrderServicelmpl::class);
        $this->app->bind(OrderDetailService::class, OrderDetailServicelmpl::class);
        $this->app->bind(LoginService::class, LoginServiceImpl::class);
        $this->app->bind(ListAdminService::class, ListAdminServicelmpl::class);
    }
}
