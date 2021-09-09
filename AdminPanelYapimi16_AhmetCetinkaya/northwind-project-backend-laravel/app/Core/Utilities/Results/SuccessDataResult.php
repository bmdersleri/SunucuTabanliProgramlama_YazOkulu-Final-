<?php

namespace App\Core\Utilities\Results;

class SuccessDataResult extends DataResult
{
    /**
     * @param mixed $data
     * @param string|null $message
     */
    public function __construct(mixed $data, string $message = null)
    {
        parent::__construct(true, $data, $message);
    }
}
