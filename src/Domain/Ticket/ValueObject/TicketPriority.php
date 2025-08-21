<?php

namespace App\Domain\Ticket\ValueObject;

use App\Infrastructure\Shared\Traits\EnumHelper;

enum TicketPriority: string
{
    use EnumHelper;
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
