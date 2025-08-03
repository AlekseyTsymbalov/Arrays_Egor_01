<?php

declare(strict_types = 1);
/*5. Объединение массивов (array_merge)

Исходные массивы:

$groupA = ['Ivan', 'Maria', 'Petr'];
$groupB = ['Anna', 'Maria', 'Sergey'];

 • Простой уровень: Объединить оба массива с помощью array_merge.
 • Средний уровень: Удалить повторяющиеся имена после объединения.
 • Hard: Объединить массивы и отсортировать результат в алфавитном порядке, затем перенумеровать ключи.
*/
$groupA = ['Ivan', 'Maria', 'Petr'];
$groupB = ['Anna', 'Maria', 'Sergey'];
echo "<pre>Лёгкий<br>";
$result = array_merge($groupA, $groupB);
print_r($result);

echo "<hr>Средний<br>";
$result01 = [];
foreach ($result as $val) {
    if (!in_array($val, $result01)) {
        $result01[] = $val;
    }
}
print_r($result01);
echo "<br> А можно и так </br>";
$result01 = array_unique(array_merge($groupA, $groupB));
print_r($result01);

echo "<hr>Сложный<br>";
$result = array_merge($groupA, $groupB);
sort($result);
print_r($result);
