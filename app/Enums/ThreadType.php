<?php

namespace App\Enums;

enum ThreadType: string
{
    case ONE_ON_ONE = 'one_on_one';
    case BROADCAST = 'broadcast';
    case PUBLIC = 'public';
    case GROUP = 'group';
    case NO_REPLY = 'no_reply';
}
