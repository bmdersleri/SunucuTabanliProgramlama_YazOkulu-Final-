<?php

namespace App\Core\Utilities\Business;

use App\Core\Utilities\Results\Result;

class BusinessRules
{
    /**
     * @param Result[] $logics
     * @return Result
     * @noinspection PhpInconsistentReturnPointsInspection
     */
    public static function Run(array $logics): Result
    {
        foreach ($logics as $logic)
            if (!$logic->Success)
                return $logic;
    }
}
