<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Customer;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\CustomerModel
 *
 * @method static Builder|CustomerModel newModelQuery()
 * @method static Builder|CustomerModel newQuery()
 * @method static Builder|CustomerModel query()
 * @mixin Eloquent
 * @property int $CustomerID
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
 * @method static Builder|CustomerModel whereAddress($value)
 * @method static Builder|CustomerModel whereCity($value)
 * @method static Builder|CustomerModel whereCompanyName($value)
 * @method static Builder|CustomerModel whereContactName($value)
 * @method static Builder|CustomerModel whereContactTitle($value)
 * @method static Builder|CustomerModel whereCountry($value)
 * @method static Builder|CustomerModel whereCustomerID($value)
 * @method static Builder|CustomerModel whereFax($value)
 * @method static Builder|CustomerModel wherePhone($value)
 * @method static Builder|CustomerModel wherePostalCode($value)
 * @method static Builder|CustomerModel whereRegion($value)
 */
class CustomerModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'customers';
    protected $primaryKey = "CustomerID";
    protected $guarded = [];

    public function toEntity(): Customer
    {
        return Customer::fromArray($this->getAttributes());
    }
}
