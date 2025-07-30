<?php

declare(strict_types = 1);
/* 2. Ассоциативный массив
Исходный массив:
$users = [
  ['name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com'],
  ['name' => 'Bob', 'age' => 30, 'email' => 'bob@example.com'],
  ['name' => 'Charlie', 'age' => 28, 'email' => 'charlie@example.com'],
  ['name' => 'Diana', 'age' => 22, 'email' => 'diana@example.com']
];
 • Простой уровень: Вывести имя и email каждого пользователя.
 • Средний уровень: Добавить каждому пользователю поле 'city' => 'Moscow' и вывести массив.
 • Hard: Пройтись по массиву, и для каждого пользователя вывести строку вида Имя (Возраст): Email.
*/

$users = [
    ['name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com'],
    ['name' => 'Bob', 'age' => 30, 'email' => 'bob@example.com'],
    ['name' => 'Charlie', 'age' => 28, 'email' => 'charlie@example.com'],
    ['name' => 'Diana', 'age' => 22, 'email' => 'diana@example.com']
];

echo "<pre>";
echo "Простой <br>";
foreach ($users as $user) {
    echo "Имя: $user[name], почта: $user[email] <br>";
}

echo "<hr>";
echo "Средний <br>";
foreach ($users as &$addCity) {
    $addCity['city'] = 'Moscow';
}
unset($addCity);
var_dump($users);

echo "<hr>";
echo "Сложный <br>";
foreach ($users as $user) {
    echo "<li>Имя - $user[name], (Возраст $user[age]): Email $user[email]</li>";
}