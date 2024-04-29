<?php

declare(strict_types=1);

namespace Tests\StrategyPattern;

use App\Common\Operation;
use App\StrategyPattern\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $sut;

    protected function setUp(): void
    {
        $this->sut = new Calculator();
    }

    public function testCalculation(): void
    {
        $this->assertSame(3, $this->sut->calculation(Operation::Plus, 1, 2));
        $this->assertSame(1, $this->sut->calculation(Operation::Minus, 3, 2));
        $this->assertSame(6, $this->sut->calculation(Operation::Times, 2, 3));
    }
}
