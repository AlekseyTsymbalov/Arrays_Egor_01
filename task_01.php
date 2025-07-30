<?php

declare(strict_types = 1);
/*1. Основы массивов, создание не ассоциативного массива
Исходный массив:
$fruits = ['apple', 'banana', 'orange', 'grape', 'pear'];
 • Простой уровень: Вывести на экран все элементы массива по одному (используя echo и доступ по индексу).
 • Средний уровень: Изменить 3-й элемент на 'mango' и вывести весь массив.
 • Hard: Перебрать массив в обратном порядке без использования array_reverse.
*/

$fruits = ["Apple", "Banana", "Orange", "Grape", "Pear"];
echo "Простой <br>";
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";
echo $fruits[3] . "<br>";
echo $fruits[4] . "<br>";
echo "<hr><br>";

echo "Средний <br>";
$fruits[2] = "Mango";
echo "<pre>";
print_r($fruits);
echo "<hr><br>";

echo "Сложный <br>";
for ($f = count($fruits) - 1; $f >= 0; $f--) {
    echo "<li>$fruits[$f]</li>";
}