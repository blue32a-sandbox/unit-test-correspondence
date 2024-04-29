<?php

declare(strict_types=1);

namespace Tests\PrivateMethod;

use App\Common\Operation;
use App\PrivateMethod\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $sut;

    protected function setUp(): void
    {
        $this->sut = new Calculator();
    }

    public function testPlus(): void
    {
        $this->assertSame(3, $this->sut->calculation(Operation::Plus, 1, 2));
        $this->assertSame(7, $this->sut->calculation(Operation::Plus, 3, 4));
    }

    public function testMinus(): void
    {
        $this->assertSame(1, $this->sut->calculation(Operation::Minus, 3, 2));
        $this->assertSame(-3, $this->sut->calculation(Operation::Minus, 7, 10));
    }

    public function testTimes(): void
    {
        $this->assertSame(6, $this->sut->calculation(Operation::Times, 2, 3));
        $this->assertSame(21, $this->sut->calculation(Operation::Times, 3, 7));
    }
}
