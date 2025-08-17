<?php

declare(strict_types = 1);
/*10. Метод array_reduce

Исходный массив:

$expenses = [
  ['type' => 'food', 'amount' => 250],
  ['type' => 'transport', 'amount' => 120],
  ['type' => 'entertainment', 'amount' => 300],
  ['type' => 'utilities', 'amount' => 180],
];

 • Простой уровень: Вычислить общую сумму расходов.
 • Средний уровень: Найти наибольшую сумму и тип расхода, к которому она относится.
 • Hard: Сгруппировать суммы по типу и вернуть строку food: 250, transport: 120, ... (при помощи array_reduce).
*/
$expenses = [
    ['type' => 'food', 'amount' => 250],
    ['type' => 'transport', 'amount' => 120],
    ['type' => 'entertainment', 'amount' => 300],
    ['type' => 'utilities', 'amount' => 180],
];
$sum = array_reduce($expenses, function($sum, $expense) {
    return $sum + $expense['amount'];
}, 0);
echo $sum . "<br><hr>";

$result = array_reduce($expenses, function($sum, $expense) {
    return $expense['amount'] > $sum['amount'] ? $expense : $sum;
}, ['type' => '', 'amount' => 0]);

echo "Наибольшая сумма: {$result['amount']}, тип расхода: {$result['type']}";
echo "<br><hr>";

$result2 = array_reduce($expenses, function($carry, $expense) {
    $carry[] = $expense['type'] . ': ' . $expense['amount'];
    return $carry;
}, []);
echo implode(', ', $result2);