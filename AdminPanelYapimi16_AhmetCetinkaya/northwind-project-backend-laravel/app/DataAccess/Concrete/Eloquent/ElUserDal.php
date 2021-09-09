<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IUserDal;
use App\DataAccess\Concrete\Eloquent\Models\UserModel;

class ElUserDal extends ElEntityRepositoryBase implements IUserDal
{

    public function __construct()
    {
        parent::__construct(new UserModel());
    }
}
