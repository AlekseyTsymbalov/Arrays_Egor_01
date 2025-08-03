<?php

declare(strict_types = 1);
/*6. Методы array_keys, array_values

Исходный массив:

$car = [
  'brand' => 'BMW',
  'model' => 'X5',
  'year' => 2022,
  'engine' => '3.0L',
  'color' => 'black',
];

 • Простой уровень: Получить массив всех ключей.
 • Средний уровень: Получить массив всех значений и объединить их в строку через пробел.
 • Hard: Вывести по очереди Ключ: значение, отсортировав ключи по алфавиту.
*/
$car = [
    'brand' => 'BMW',
    'model' => 'X5',
    'year' => 2022,
    'engine' => '3.0L',
    'color' => 'black',
];
echo "Простой <br>";
foreach ($car as $key => $value) {
    echo "$key <br>";
}
$keys = array_keys($car);
echo "<pre>";
print_r($keys);
echo "</pre>";