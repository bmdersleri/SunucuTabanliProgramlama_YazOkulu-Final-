<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Territory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\TerritoryModel
 *
 * @method static Builder|TerritoryModel newModelQuery()
 * @method static Builder|TerritoryModel newQuery()
 * @method static Builder|TerritoryModel query()
 * @mixin Eloquent
 * @property string $TerritoryID
 * @property string $TerritoryDescription
 * @property int $RegionID
 * @method static Builder|TerritoryModel whereRegionID($value)
 * @method static Builder|TerritoryModel whereTerritoryDescription($value)
 * @method static Builder|TerritoryModel whereTerritoryID($value)
 */
class TerritoryModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'territories';
    protected $primaryKey = "TerritoryID";
    protected $guarded = [];

    public function toEntity(): Territory
    {
        return Territory::fromArray($this->getAttributes());
    }
}
