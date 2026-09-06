<?php

declare(strict_types=1);

namespace App\Domain\Pricing;

final class QuantityCalculator
{
    /**
     * Menghitung quantity yang ditagihkan untuk layanan berbasis kilogram.
     *
     * Business rule saat ini:
     * - minimum billing 1 kg;
     * - di atas 1 kg, gunakan 1 angka desimal;
     * - digit berikutnya dibuang (truncate), bukan dibulatkan normal.
     */
    public function billableKilograms(float $actualKilograms): float
    {
        if ($actualKilograms <= 0) {
            throw new \InvalidArgumentException('Actual kilograms must be greater than zero.');
        }

        if ($actualKilograms < 1) {
            return 1.0;
        }

        return floor(($actualKilograms + 1e-9) * 10) / 10;
    }
}
