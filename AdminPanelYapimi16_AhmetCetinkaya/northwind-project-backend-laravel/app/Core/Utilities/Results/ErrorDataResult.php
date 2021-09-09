<?php

namespace App\Core\Utilities\Results;

class ErrorDataResult extends DataResult
{
    /**
     * @param mixed|null $data
     * @param string|null $message
     */
    public function __construct(mixed $data = null, string $message = null)
    {
        parent::__construct(false, $data, $message);
    }
}
