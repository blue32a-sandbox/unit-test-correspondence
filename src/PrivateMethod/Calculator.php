<?php

declare(strict_types=1);

namespace App\PrivateMethod;

use App\Common\Operation;

class Calculator
{
    public function __construct()
    {
    }

    public function calculation(Operation $operation, int $a, int $b): int
    {
        return match ($operation) {
            Operation::Plus => $this->plus($a, $b),
            Operation::Minus => $this->minus($a, $b),
            Operation::Times => $this->times($a, $b),
        };
    }

    private function plus(int $a, int $b): int
    {
        return $a + $b;
    }

    private function minus(int $a, int $b): int
    {
        return $a - $b;
    }

    private function times(int $a, int $b): int
    {
        return $a * $b;
    }
}
