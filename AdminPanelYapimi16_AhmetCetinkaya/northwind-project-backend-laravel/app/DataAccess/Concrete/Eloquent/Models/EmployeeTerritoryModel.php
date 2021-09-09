<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\EmployeeTerritory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\EmployeeTerritoryModel
 *
 * @method static Builder|EmployeeTerritoryModel newModelQuery()
 * @method static Builder|EmployeeTerritoryModel newQuery()
 * @method static Builder|EmployeeTerritoryModel query()
 * @mixin Eloquent
 * @property int $EmployeeID
 * @property string $TerritoryID
 * @method static Builder|EmployeeTerritoryModel whereEmployeeID($value)
 * @method static Builder|EmployeeTerritoryModel whereTerritoryID($value)
 */
class EmployeeTerritoryModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'employeeterritories';
    protected $primaryKey = "EmployeeID";
    protected $guarded = [];

    public function toEntity(): EmployeeTerritory
    {
        return EmployeeTerritory::fromArray($this->getAttributes());
    }
}
