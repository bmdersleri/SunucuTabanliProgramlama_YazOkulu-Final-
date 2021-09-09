<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use App\Entities\Concrete\Category;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\DataAccess\Concrete\Eloquent\Models\CategoryModel
 *
 * @method static Builder|CategoryModel newModelQuery()
 * @method static Builder|CategoryModel newQuery()
 * @method static Builder|CategoryModel query()
 * @method static Builder|CategoryModel whereCategoryID($value)
 * @method static Builder|CategoryModel whereCategoryName($value)
 * @method static Builder|CategoryModel whereDescription($value)
 * @mixin Eloquent
 * @property int $CategoryID
 * @property string $CategoryName
 * @property string|null $Description
 */
class CategoryModel extends Model implements IModel
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'categories';
    protected $primaryKey = "CategoryID";
    protected $guarded = [];

    public function toEntity(): Category
    {
        return Category::fromArray($this->getAttributes());
    }
}
