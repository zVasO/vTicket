<?php

namespace App\Enum;

use App\Trait\EnumHelper;

enum TicketPriority: string
{
    use EnumHelper;
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
