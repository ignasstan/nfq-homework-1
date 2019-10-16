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

try {
    $consoleColor = new JakubOnderka\PhpConsoleColor\ConsoleColor();

    for ($i = 1; $i <= 255; $i++) {
        echo $consoleColor->apply("bg_color_$i", str_pad($i, 6, ' ', STR_PAD_BOTH));

        if ($i % 15 === 0) {
            echo "\n";
        }
    }
} catch (Throwable $exp) {
    echo 'Klaida: ' . $exp . "\n";
}