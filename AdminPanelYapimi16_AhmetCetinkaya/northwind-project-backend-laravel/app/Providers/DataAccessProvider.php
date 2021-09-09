<?php


namespace App\Providers;

use App\DataAccess\Abstracts\ICategoryDal;
use App\DataAccess\Abstracts\ICustomerDal;
use App\DataAccess\Abstracts\IEmployeeDal;
use App\DataAccess\Abstracts\IEmployeeTerritoryDal;
use App\DataAccess\Abstracts\IOrderDal;
use App\DataAccess\Abstracts\IOrderDetailDal;
use App\DataAccess\Abstracts\IProductDal;
use App\DataAccess\Abstracts\IRegionDal;
use App\DataAccess\Abstracts\IShipperDal;
use App\DataAccess\Abstracts\ISupplierDal;
use App\DataAccess\Abstracts\ITerritoryDal;
use App\DataAccess\Abstracts\IUserDal;
use App\DataAccess\Concrete\Eloquent\ElCategoryDal;
use App\DataAccess\Concrete\Eloquent\ElCustomerDal;
use App\DataAccess\Concrete\Eloquent\ElEmployeeDal;
use App\DataAccess\Concrete\Eloquent\ElEmployeeTerritoryDal;
use App\DataAccess\Concrete\Eloquent\ElOrderDal;
use App\DataAccess\Concrete\Eloquent\ElOrderDetailDal;
use App\DataAccess\Concrete\Eloquent\ElProductDal;
use App\DataAccess\Concrete\Eloquent\ElRegionDal;
use App\DataAccess\Concrete\Eloquent\ElShipperDal;
use App\DataAccess\Concrete\Eloquent\ElSupplierDal;
use App\DataAccess\Concrete\Eloquent\ElTerritoryDal;
use App\DataAccess\Concrete\Eloquent\ElUserDal;
use Illuminate\Support\ServiceProvider;

class DataAccessProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(ICategoryDal::class, ElCategoryDal::class);
        $this->app->singleton(ICustomerDal::class, ElCustomerDal::class);
        $this->app->singleton(IEmployeeDal::class, ElEmployeeDal::class);
        $this->app->singleton(IEmployeeTerritoryDal::class, ElEmployeeTerritoryDal::class);
        $this->app->singleton(IOrderDal::class, ElOrderDal::class);
        $this->app->singleton(IOrderDetailDal::class, ElOrderDetailDal::class);
        $this->app->singleton(IProductDal::class, ElProductDal::class);
        $this->app->singleton(IRegionDal::class, ElRegionDal::class);
        $this->app->singleton(IShipperDal::class, ElShipperDal::class);
        $this->app->singleton(ISupplierDal::class, ElSupplierDal::class);
        $this->app->singleton(ITerritoryDal::class, ElTerritoryDal::class);
        $this->app->singleton(IUserDal::class, ElUserDal::class);
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
