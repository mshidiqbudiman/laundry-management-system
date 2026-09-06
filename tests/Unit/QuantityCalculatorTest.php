<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Domain\Pricing\QuantityCalculator;
use PHPUnit\Framework\TestCase;

final class QuantityCalculatorTest extends TestCase
{
    public function test_weight_below_one_kilogram_is_billed_as_one_kilogram(): void
    {
        $calculator = new QuantityCalculator();

        self::assertSame(1.0, $calculator->billableKilograms(0.7));
    }

    public function test_weight_is_truncated_to_one_decimal_place(): void
    {
        $calculator = new QuantityCalculator();

        self::assertSame(1.2, $calculator->billableKilograms(1.23));
        self::assertSame(1.2, $calculator->billableKilograms(1.28));
        self::assertSame(2.5, $calculator->billableKilograms(2.57));
    }

    public function test_zero_or_negative_weight_is_rejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        (new QuantityCalculator())->billableKilograms(0);
    }
}
