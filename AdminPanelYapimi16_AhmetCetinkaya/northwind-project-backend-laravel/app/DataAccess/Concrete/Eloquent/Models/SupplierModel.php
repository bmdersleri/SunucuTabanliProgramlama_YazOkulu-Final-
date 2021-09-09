<?php


namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Supplier;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\SupplierModel
 *
 * @method static Builder|SupplierModel newModelQuery()
 * @method static Builder|SupplierModel newQuery()
 * @method static Builder|SupplierModel query()
 * @mixin Eloquent
 * @property int $SupplierID
 * @property string $CompanyName
 * @property string|null $ContactName
 * @property string|null $ContactTitle
 * @property string|null $Address
 * @property string|null $City
 * @property string|null $Region
 * @property string|null $PostalCode
 * @property string|null $Country
 * @property string|null $Phone
 * @property string|null $Fax
 * @property string|null $HomePage
 * @method static Builder|SupplierModel whereAddress($value)
 * @method static Builder|SupplierModel whereCity($value)
 * @method static Builder|SupplierModel whereCompanyName($value)
 * @method static Builder|SupplierModel whereContactName($value)
 * @method static Builder|SupplierModel whereContactTitle($value)
 * @method static Builder|SupplierModel whereCountry($value)
 * @method static Builder|SupplierModel whereFax($value)
 * @method static Builder|SupplierModel whereHomePage($value)
 * @method static Builder|SupplierModel wherePhone($value)
 * @method static Builder|SupplierModel wherePostalCode($value)
 * @method static Builder|SupplierModel whereRegion($value)
 * @method static Builder|SupplierModel whereSupplierID($value)
 */
class SupplierModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'suppliers';
    protected $primaryKey = "SupplierID";
    protected $guarded = [];

    public function toEntity(): Supplier
    {
        return Supplier::fromArray($this->getAttributes());
    }
}
