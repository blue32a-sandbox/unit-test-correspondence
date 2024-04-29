<?php

declare(strict_types=1);

namespace App\StrategyPattern;

class TimesStrategy implements Strategy
{
    public function calculation(int $a, int $b): int
    {
        return $a * $b;
    }
}
