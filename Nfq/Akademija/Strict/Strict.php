<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int...$numbers): int
{
    return __FUNCTION__ . ': ' . array_sum($numbers);
}