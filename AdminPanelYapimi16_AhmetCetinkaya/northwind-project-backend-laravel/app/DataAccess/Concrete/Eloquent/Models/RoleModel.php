<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'roles';

    public function users()
    {
        return $this->belongsToMany(UserModel::class);
    }
}
