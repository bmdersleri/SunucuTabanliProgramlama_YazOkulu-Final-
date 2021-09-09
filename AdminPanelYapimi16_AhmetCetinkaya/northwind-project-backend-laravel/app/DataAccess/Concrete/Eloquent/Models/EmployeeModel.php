<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Employee;
use DateTime;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\EmployeeModel
 *
 * @method static Builder|EmployeeModel newModelQuery()
 * @method static Builder|EmployeeModel newQuery()
 * @method static Builder|EmployeeModel query()
 * @mixin Eloquent
 * @property int $EmployeeID
 * @property string $LastName
 * @property string $FirstName
 * @property string|null $Title
 * @property string|null $TitleOfCourtesy
 * @property DateTime $BirthDate
 * @property DateTime $HireDate
 * @property string|null $Address
 * @property string|null $City
 * @property string|null $Region
 * @property string|null $PostalCode
 * @property string|null $Country
 * @property string|null $HomePhone
 * @property string|null $Extension
 * @property string $Notes
 * @property int|null $ReportsTo
 * @property float|null $Salary
 * @method static Builder|EmployeeModel whereAddress($value)
 * @method static Builder|EmployeeModel whereBirthDate($value)
 * @method static Builder|EmployeeModel whereCity($value)
 * @method static Builder|EmployeeModel whereCountry($value)
 * @method static Builder|EmployeeModel whereEmployeeID($value)
 * @method static Builder|EmployeeModel whereExtension($value)
 * @method static Builder|EmployeeModel whereFirstName($value)
 * @method static Builder|EmployeeModel whereHireDate($value)
 * @method static Builder|EmployeeModel whereHomePhone($value)
 * @method static Builder|EmployeeModel whereLastName($value)
 * @method static Builder|EmployeeModel whereNotes($value)
 * @method static Builder|EmployeeModel wherePostalCode($value)
 * @method static Builder|EmployeeModel whereRegion($value)
 * @method static Builder|EmployeeModel whereReportsTo($value)
 * @method static Builder|EmployeeModel whereSalary($value)
 * @method static Builder|EmployeeModel whereTitle($value)
 * @method static Builder|EmployeeModel whereTitleOfCourtesy($value)
 */
class EmployeeModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'employees';
    protected $primaryKey = "EmployeeID";
    protected $guarded = [];

    public function toEntity(): Employee
    {
        return Employee::fromArray($this->getAttributes());
    }
}
