<?php

require_once ('vendor/autoload.php');

function calculateHomeWorkSum( ...$numbers)
{
    return __FUNCTION__ . ': ' . array_sum($numbers);
}

try {
    echo calculateHomeWorkSum(3, 2.2, '1') . "\n";
} catch (Throwable $exp) {
    echo 'Klaida: ' . $exp . "\n";
}

try {
    echo 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: ' . \Nfq\Akademija\NotTyped\calculateHomeWorkSum(3, 2.2, '1') . "\n";
} catch (Throwable $exp) {
    echo'Klaida: ' . $exp . "\n";
}

try {
    echo 'Nfq\Akademija\Soft\calculateHomeWorkSum: ' . \Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') . "\n";
} catch (Throwable $exp) {
    echo 'Klaida: ' . $exp . "\n";
}

try {
    echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: ' . \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1') . "\n";
} catch (Throwable $exp) {
    echo 'Klaida: ' . $exp . "\n";
}

//try {
//    $climate = new League\CLImate\CLImate;
//    $climate->out('This prints to the terminal.');
//} catch (Throwable $exp) {
//    echo 'Klaida: ' . $exp . "\n";
//}