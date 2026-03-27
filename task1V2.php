<?php

$kolvo = (int) readline('Сколько чисел хотите ввести? ');

$numbers = [];
for ($i = 0; $i < $kolvo; $i++) {
    $numbers[] = (float) readline('Введите число [' . ($i + 1) . ']: ');
}

$len = count($numbers);
$isAscending = true;

if ($len <= 1) {
    $isAscending = true;
} else {
    $i = 0;
    while ($i < $len - 1) {
        if ($numbers[$i] > $numbers[$i + 1]) {
            $isAscending = false;
            break;
        }
        $i = $i + 1;
    }
}

if ($isAscending) {
    echo "Да: массив отсортирован по возрастанию.\n";
} else {
    echo "Нет: массив не отсортирован по возрастанию.\n";
}
