<?php

$swap = function(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
};

// Проверка функции swap
$a = 5;
$b = 8;
echo "До обмена: a = $a, b = $b<br>";
$swap($a, $b);
echo "После обмена: a = $a, b = $b<br>";

var_dump(5 === $b); // true
var_dump(8 === $a); // true

echo "<br>";


function map(array $array, callable $callback): array {
    $result = [];
    foreach ($array as $value) {
        $result[] = $callback($value);
    }
    return $result;
}


$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = map($numbers, fn($n) => $n ** 2);

echo "Исходный массив: " . implode(', ', $numbers) . "<br>";
echo "Массив квадратов: " . implode(', ', $squaredNumbers) . "<br>";


?>