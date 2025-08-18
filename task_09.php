<?php

declare(strict_types = 1);
/*9. Метод array_filter

Исходный массив:

$orders = [
  ['id' => 1, 'total' => 1000],
  ['id' => 2, 'total' => 350],
  ['id' => 3, 'total' => 1200],
  ['id' => 4, 'total' => 270],
  ['id' => 5, 'total' => 890],
];

• Простой уровень: Оставить заказы с суммой больше 500.
 • Средний уровень: Оставить заказы, где сумма — чётное число.
 • Hard: Оставить заказы, где сумма кратна 10 и больше 800.
*/
$orders = [
    ['id' => 1, 'total' => 1000],
    ['id' => 2, 'total' => 350],
    ['id' => 3, 'total' => 1200],
    ['id' => 4, 'total' => 275],
    ['id' => 5, 'total' => 890],
];
$result = array_filter($orders, function ($item) {
    return $item['total'] > 500;
});
echo "<pre>";
print_r($result);

echo "<br>";
$result2 = array_filter($orders, function ($item) {
    return $item['total'] % 2 === 0;
//    return filter_var( $item['total'], FILTER_VALIDATE_INT) && ($item['total'] & 1) === 0;
});
print_r(array_values($result2));

echo "<br>";
$result3 = array_filter($orders, function ($item) {
    return $item['total'] % 10 === 0 && $item['total'] > 800;
});
print_r($result3);