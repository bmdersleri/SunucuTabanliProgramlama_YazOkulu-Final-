<?php

namespace App\Core\Utilities\Results;

class DataResult extends Result
{
    public mixed $Data;

    /**
     * @param bool $success
     * @param mixed|null $data
     * @param string|null $message
     */
    public function __construct(bool $success, mixed $data = null, string $message = null)
    {
        parent::__construct($success, $message);
        $this->Data = $data;
    }
}
