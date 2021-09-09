<?php

namespace App\Core\Utilities\Results;

class Result
{
    public bool $Success;
    public ?string $Message;

    /**
     * @param bool $success
     * @param string|null $message
     */
    public function __construct(bool $success, string $message = null)
    {
        $this->Success = $success;
        $this->Message = $message;
    }
}
