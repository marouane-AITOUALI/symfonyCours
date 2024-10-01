<?php

namespace App\Enum;

enum UserAccountStatusEnum: string
{
    case ACTIVE = 'active';
    case PENDING = 'pending';
    case DELETED = 'deleted';
    case BLOCKED = 'blocked';
    case BANNED = 'banned';
}


?>