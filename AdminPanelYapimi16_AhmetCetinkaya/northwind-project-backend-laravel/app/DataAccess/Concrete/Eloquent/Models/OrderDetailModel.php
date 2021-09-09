<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\OrderDetail;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\OrderDetailModel
 *
 * @method static Builder|OrderDetailModel newModelQuery()
 * @method static Builder|OrderDetailModel newQuery()
 * @method static Builder|OrderDetailModel query()
 * @mixin Eloquent
 * @property int $OrderID
 * @property int $ProductID
 * @property string $UnitPrice
 * @property int $Quantity
 * @property float $Discount
 * @method static Builder|OrderDetailModel whereDiscount($value)
 * @method static Builder|OrderDetailModel whereOrderID($value)
 * @method static Builder|OrderDetailModel whereProductID($value)
 * @method static Builder|OrderDetailModel whereQuantity($value)
 * @method static Builder|OrderDetailModel whereUnitPrice($value)
 */
class OrderDetailModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'order details';
    protected $primaryKey = "OrderID";
    protected $guarded = [];

    public function toEntity(): OrderDetail
    {
        return OrderDetail::fromArray($this->getAttributes());
    }
}
