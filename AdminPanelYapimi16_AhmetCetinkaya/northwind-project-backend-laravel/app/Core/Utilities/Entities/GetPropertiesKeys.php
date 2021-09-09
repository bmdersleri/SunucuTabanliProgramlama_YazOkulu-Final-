<?php

namespace App\Core\Utilities\Entities;

trait GetPropertiesKeys
{
    /**
     * @return string[]
     */
    public static function getPropertiesKeys(): array
    {
        return array_keys(get_class_vars(self::class));
    }
}

