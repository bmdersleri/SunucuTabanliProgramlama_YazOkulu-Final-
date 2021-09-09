<?php

namespace App\Core\Utilities\Results;

class SuccessResult extends Result
{
    /**
     * @param string|null $message
     */
    public function __construct(string $message = null)
    {
        parent::__construct(true, $message);
    }
}
