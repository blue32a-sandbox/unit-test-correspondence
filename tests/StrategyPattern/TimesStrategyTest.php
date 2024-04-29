<?php

declare(strict_types=1);

namespace Tests\StrategyPattern;

use App\StrategyPattern\TimesStrategy;
use PHPUnit\Framework\TestCase;

class TimesStrategyTest extends TestCase
{
    public function testCalculation(): void
    {
        $sut = new TimesStrategy();
        $this->assertSame(6, $sut->calculation(2, 3));
        $this->assertSame(21, $sut->calculation(3, 7));
    }
}
