<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Region;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\RegionModel
 *
 * @method static Builder|RegionModel newModelQuery()
 * @method static Builder|RegionModel newQuery()
 * @method static Builder|RegionModel query()
 * @mixin Eloquent
 * @property int $RegionID
 * @property string $RegionDescription
 * @method static Builder|RegionModel whereRegionDescription($value)
 * @method static Builder|RegionModel whereRegionID($value)
 */
class RegionModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'region';
    protected $primaryKey = "RegionID";
    protected $guarded = [];

    public function toEntity(): Region
    {
        return Region::fromArray($this->getAttributes());
    }
}
