<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Product;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\ProductModel
 *
 * @method static Builder|ProductModel newModelQuery()
 * @method static Builder|ProductModel newQuery()
 * @method static Builder|ProductModel query()
 * @mixin Eloquent
 * @property int $ProductID
 * @property string $ProductName
 * @property int|null $SupplierID
 * @property int|null $CategoryID
 * @property string|null $QuantityPerUnit
 * @property float|null $UnitPrice
 * @property int|null $UnitsInStock
 * @property int|null $UnitsOnOrder
 * @property int|null $ReorderLevel
 * @property bool $Discontinued
 */
class ProductModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'products';
    protected $primaryKey = "ProductID";
    protected $guarded = [];

    public function toEntity(): Product
    {
        return Product::fromArray($this->getAttributes());
    }
}
