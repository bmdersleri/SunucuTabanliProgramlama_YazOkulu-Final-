<?php


namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Order;
use DateTime;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\OrderModel
 *
 * @method static Builder|OrderModel newModelQuery()
 * @method static Builder|OrderModel newQuery()
 * @method static Builder|OrderModel query()
 * @mixin Eloquent
 * @property int $OrderID
 * @property string|null $CustomerID
 * @property int|null $EmployeeID
 * @property DateTime|null $OrderDate
 * @property DateTime|null $RequiredDate
 * @property DateTime|null $ShippedDate
 * @property int|null $ShipVia
 * @property string|null $Freight
 * @property string|null $ShipName
 * @property string|null $ShipAddress
 * @property string|null $ShipCity
 * @property string|null $ShipRegion
 * @property string|null $ShipPostalCode
 * @property string|null $ShipCountry
 * @method static Builder|OrderModel whereCustomerID($value)
 * @method static Builder|OrderModel whereEmployeeID($value)
 * @method static Builder|OrderModel whereFreight($value)
 * @method static Builder|OrderModel whereOrderDate($value)
 * @method static Builder|OrderModel whereOrderID($value)
 * @method static Builder|OrderModel whereRequiredDate($value)
 * @method static Builder|OrderModel whereShipAddress($value)
 * @method static Builder|OrderModel whereShipCity($value)
 * @method static Builder|OrderModel whereShipCountry($value)
 * @method static Builder|OrderModel whereShipName($value)
 * @method static Builder|OrderModel whereShipPostalCode($value)
 * @method static Builder|OrderModel whereShipRegion($value)
 * @method static Builder|OrderModel whereShipVia($value)
 * @method static Builder|OrderModel whereShippedDate($value)
 */
class OrderModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'orders';
    protected $primaryKey = "OrderID";
    protected $guarded = [];

    public function toEntity(): Order
    {
        return Order::fromArray($this->getAttributes());
    }
}
