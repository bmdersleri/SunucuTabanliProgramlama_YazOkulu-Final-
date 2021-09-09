<?php


namespace App\Providers;

use App\Business\Abstracts\IAuthService;
use App\Business\Abstracts\ICategoryService;
use App\Business\Abstracts\ICustomerService;
use App\Business\Abstracts\IEmployeeService;
use App\Business\Abstracts\IEmployeeTerritoryService;
use App\Business\Abstracts\IOrderDetailService;
use App\Business\Abstracts\IOrderService;
use App\Business\Abstracts\IProductService;
use App\Business\Abstracts\IRegionService;
use App\Business\Abstracts\IShipperService;
use App\Business\Abstracts\ISupplierService;
use App\Business\Abstracts\ITerritoryService;
use App\Business\Concrete\AuthManager;
use App\Business\Concrete\CategoryManager;
use App\Business\Concrete\CustomerManager;
use App\Business\Concrete\EmployeeManager;
use App\Business\Concrete\EmployeeTerritoryManager;
use App\Business\Concrete\OrderDetailManager;
use App\Business\Concrete\OrderManager;
use App\Business\Concrete\ProductManager;
use App\Business\Concrete\RegionManager;
use App\Business\Concrete\ShipperManager;
use App\Business\Concrete\SupplierManager;
use App\Business\Concrete\TerritoryManager;
use Illuminate\Support\ServiceProvider;

class BusinessProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(IAuthService::class, AuthManager::class);
        $this->app->singleton(ICategoryService::class, CategoryManager::class);
        $this->app->singleton(ICustomerService::class, CustomerManager::class);
        $this->app->singleton(IEmployeeService::class, EmployeeManager::class);
        $this->app->singleton(IEmployeeTerritoryService::class, EmployeeTerritoryManager::class);
        $this->app->singleton(IOrderDetailService::class, OrderDetailManager::class);
        $this->app->singleton(IOrderService::class, OrderManager::class);
        $this->app->singleton(IProductService::class, ProductManager::class);
        $this->app->singleton(IRegionService::class, RegionManager::class);
        $this->app->singleton(IShipperService::class, ShipperManager::class);
        $this->app->singleton(ISupplierService::class, SupplierManager::class);
        $this->app->singleton(ITerritoryService::class, TerritoryManager::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
