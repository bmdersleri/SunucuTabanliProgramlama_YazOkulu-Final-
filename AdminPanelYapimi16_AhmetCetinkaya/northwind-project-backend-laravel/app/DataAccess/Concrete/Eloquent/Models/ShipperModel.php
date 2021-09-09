<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Shipper;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\ShipperModel
 *
 * @method static Builder|ShipperModel newModelQuery()
 * @method static Builder|ShipperModel newQuery()
 * @method static Builder|ShipperModel query()
 * @mixin Eloquent
 * @property int $ShipperID
 * @property string $CompanyName
 * @property string|null $Phone
 * @method static Builder|ShipperModel whereCompanyName($value)
 * @method static Builder|ShipperModel wherePhone($value)
 * @method static Builder|ShipperModel whereShipperID($value)
 */
class ShipperModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'shippers';
    protected $primaryKey = "ShipperID";
    protected $guarded = [];

    public function toEntity(): Shipper
    {
        return Shipper::fromArray($this->getAttributes());
    }
}
