<?php

declare(strict_types=1);

namespace App\StrategyPattern;

use App\Common\Operation;

class Calculator
{
    private array $strategies = [];

    public function __construct()
    {
        $this->strategies = [
            Operation::Plus->value => new PlusStrategy(),
            Operation::Minus->value => new MinusStrategy(),
            Operation::Times->value => new TimesStrategy(),
        ];
    }

    public function calculation(Operation $operation, int $a, int $b): int
    {
        return $this->strategies[$operation->value]->calculation($a, $b);
    }
}
