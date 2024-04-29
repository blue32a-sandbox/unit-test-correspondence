<?php

declare(strict_types=1);

namespace Tests\StrategyPattern;

use App\StrategyPattern\PlusStrategy;
use PHPUnit\Framework\TestCase;

class PlusStrategyTest extends TestCase
{
    public function testCalculation(): void
    {
        $sut = new PlusStrategy();
        $this->assertSame(3, $sut->calculation(1, 2));
        $this->assertSame(7, $sut->calculation(3, 4));
    }
}
