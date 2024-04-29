<?php

declare(strict_types=1);

namespace App\StrategyPattern;

Interface Strategy
{
    public function calculation(int $a, int $b): int;
}
