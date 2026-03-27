<?php

$kolvo = (int) readline('Сколько чисел хотите ввести? ');

$numbers = [];
for ($i = 0; $i < $kolvo; $i++) {
    $numbers[] = (float) readline('Введите число [' . ($i + 1) . ']: ');
}

$len = count($numbers);
$isZigzag = false;

if ($len <= 1) {
    $isZigzag = true;
} elseif ($len == 2) {
    if ($numbers[0] != $numbers[1]) {
        $isZigzag = true;
    }
} else {
    $okA = true;
    $k = 1;
    while ($k < $len) {
        if ($k % 2 == 1) {
            if ($numbers[$k] <= $numbers[$k - 1]) {
                $okA = false;
                break;
            }
        } else {
            if ($numbers[$k] >= $numbers[$k - 1]) {
                $okA = false;
                break;
            }
        }
        $k = $k + 1;
    }

    $okB = true;
    $k = 1;
    while ($k < $len) {
        if ($k % 2 == 1) {
            if ($numbers[$k] >= $numbers[$k - 1]) {
                $okB = false;
                break;
            }
        } else {
            if ($numbers[$k] <= $numbers[$k - 1]) {
                $okB = false;
                break;
            }
        }
        $k = $k + 1;
    }

    if ($okA || $okB) {
        $isZigzag = true;
    }
}

if ($isZigzag) {
    echo "Да: массив является зигзагом.\n";
} else {
    echo "Нет: массив не является зигзагом.\n";
}
