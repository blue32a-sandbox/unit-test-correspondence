<?php

declare(strict_types=1);

namespace Tests\StrategyPattern;

use App\StrategyPattern\MinusStrategy;
use PHPUnit\Framework\TestCase;

class MinusStrategyTest extends TestCase
{
    public function testCalculation(): void
    {
        $sut = new MinusStrategy();
        $this->assertSame(1, $sut->calculation(3, 2));
        $this->assertSame(-3, $sut->calculation(7, 10));
    }
}
