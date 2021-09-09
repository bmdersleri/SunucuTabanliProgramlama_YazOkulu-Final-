<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Core\Utilities\Entities;

trait FromArray
{
    public static function fromArray(array $data = [])
    {
        $entity = new self();
        foreach (array_keys(get_class_vars(self::class)) as $property) {
            if (!array_key_exists($property, $data)) continue;
            $entity->{$property} = $data[$property];
        }
        return $entity;
    }
}
