<?php

declare(strict_types=1);

require_once __DIR__ . '/app/Domain/Pricing/QuantityCalculator.php';

use App\Domain\Pricing\QuantityCalculator;

$calculator = new QuantityCalculator();

$actual = 1.28;
$billable = $calculator->billableKilograms($actual);

echo "Family Laundry starter is ready.\n";
echo "Example: {$actual} kg -> {$billable} kg billable.\n";
