<?php

declare(strict_types=1);

namespace App\Common;

enum Operation: string{
    case Plus = '+';
    case Minus = '-';
    case Times = '*';
}
