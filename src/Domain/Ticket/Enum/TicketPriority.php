<?php

namespace App\Domain\Ticket\Enum;

use App\Infrastructure\Shared\Traits\EnumHelper;

enum TicketPriority: string
{
    use EnumHelper;
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
