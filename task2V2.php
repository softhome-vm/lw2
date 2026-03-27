<?php

$n = (int) readline('Размер квадратной матрицы n (число строк и столбцов): ');

$matrix = [];
for ($r = 0; $r < $n; $r++) {
    $row = [];
    for ($c = 0; $c < $n; $c++) {
        $row[] = (float) readline(
            'Строка ' . ($r + 1) . ', столбец ' . ($c + 1) . ': '
        );
    }
    $matrix[] = $row;
}

$sum = 0;

$row = 0;
while ($row < $n) {
    $col = $n - 1 - $row;
    $sum = $sum + $matrix[$row][$col];
    $row = $row + 1;
}

echo 'Сумма элементов побочной диагонали: ' . $sum . "\n";
