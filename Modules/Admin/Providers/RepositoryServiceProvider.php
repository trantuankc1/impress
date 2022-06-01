<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Contracts\Repositories\Mysql\ContactRepository;
use Modules\Admin\Contracts\Repositories\Mysql\ListAdminRepository;
use Modules\Admin\Contracts\Repositories\Mysql\OrderDetailRepository;
use Modules\Admin\Contracts\Repositories\Mysql\OrderRepository;
use Modules\Admin\Contracts\Repositories\Mysql\ProductRepository;
use Modules\Admin\Contracts\Repositories\Mysql\UserRepository;
use Modules\Admin\Repositories\Mysql\CategoryRepolmpl;
use Modules\Admin\Repositories\Mysql\ContactRepolmpl;
use Modules\Admin\Repositories\Mysql\ListAdminRepolmpl;
use Modules\Admin\Repositories\Mysql\OrderDetailRepolmpl;
use Modules\Admin\Repositories\Mysql\OrderRepolmpl;
use Modules\Admin\Repositories\Mysql\ProductRepoImpl;
use Modules\Admin\Repositories\Mysql\UserRepoImpl;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register repositories.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ProductRepository::class, ProductRepoImpl::class);
        $this->app->bind(CategoryRepository::class, CategoryRepolmpl::class);
        $this->app->bind(UserRepository::class, UserRepoImpl::class);
        $this->app->bind(ContactRepository::class, ContactRepolmpl::class);
        $this->app->bind(OrderRepository::class, OrderRepolmpl::class);
        $this->app->bind(OrderDetailRepository::class, OrderDetailRepolmpl::class);
        $this->app->bind(ListAdminRepository::class, ListAdminRepolmpl::class);
    }
}
