<?php

declare(strict_types = 1);
/*3. Циклы foreach, for, while для массивов
Исходный массив:
$numbers = [3, 7, 10, 5, 12, 18, 21, 4, 9, 15];
 • Простой уровень: Использовать foreach для вывода всех элементов массива.
 • Средний уровень: С помощью цикла for вывести индекс и квадрат каждого элемента (пример: Элемент 0: 9).
 • Hard: Использовать while для:
 • Вывода всех чисел, делящихся на 3.
 • Подсчёта их суммы.
 • Завершения перебора при достижении суммы больше 30.
*/

$numbers = [3, 7, 10, 5, 12, 18, 21, 4, 9, 15];
echo "Простой <br>";
foreach ($numbers as $number) {
    echo "$number ";
}

echo "<hr>";
echo "Средний <br>";
for ($i = 0; $i < count($numbers); $i++) {
    echo 'Элемент ' . $i. ': ' . $numbers[$i] * $numbers[$i] . '<br>';
}
echo "Или так! <br>";
for ($i = 0; $i < count($numbers); $i++) {
    echo "Элемент $i равный $numbers[$i]: " . $numbers[$i] * $numbers[$i] . '<br>';
}
echo "<hr>";
echo "Сложный <br>";
$i = 0;
$sum = 0; // 3 + 12 = 15 + 18 = 33
while ($i < count($numbers)) {
    if ($numbers[$i] % 3 === 0) {
        echo "$numbers[$i] <br>";
        $sum += $numbers[$i];
    }
    $i++;
    if ($sum > 30) break;
}

echo "<br>Сумма чисел, делящихся на 3: равна $sum<br>";


