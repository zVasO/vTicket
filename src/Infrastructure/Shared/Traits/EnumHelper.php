<?php

namespace App\Infrastructure\Shared\Traits;

trait EnumHelper
{
    /**
     * Return all values as array of strings
     * @return array
     */
    public static function values(): array
    {
        return array_map(static fn(self $priority) => $priority->value, self::cases());
    }

}
