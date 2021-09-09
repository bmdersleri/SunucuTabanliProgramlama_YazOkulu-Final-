<?php

namespace App\DataAccess\Concrete\Eloquent\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoleModel extends Model
{
    use HasFactory;

    protected $table = 'user_roles';
}
