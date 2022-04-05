<?php

namespace App\Enums;

enum Status: string
{
    case ONLINE = 'online';
    case OFFLINE = 'offline';

    case BLOCKED = 'blocked';
    case UNBLOCKED = 'unblocked';
}
