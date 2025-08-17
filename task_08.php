<?php

declare(strict_types = 1);
/*8. Использование array_map вместо foreach

Исходный массив:

$users = [
  ['first_name' => 'ivan', 'last_name' => 'petrov'],
  ['first_name' => 'anna', 'last_name' => 'smirnova'],
  ['first_name' => 'sergey', 'last_name' => 'ivanov'],
];

 • Простой уровень: Преобразовать имена и фамилии так, чтобы первая буква была заглавной (Ivan Petrov).
 • Средний уровень: Собрать из каждого пользователя строку Фамилия, Имя и вернуть новый массив.
 • Hard: Используя array_map, создать массив email-адресов формата f.lastname@example.com, где f — первая буква имени.
*/
$users = [
    ['first_name' => 'ivan', 'last_name' => 'petrov'],
    ['first_name' => 'anna', 'last_name' => 'smirnova'],
    ['first_name' => 'sergey', 'last_name' => 'ivanov'],
];
$result = array_map(function ($user) {
    return ucwords($user['first_name'] . ' ' . $user['last_name']);
}, $users);
echo "Простой<br><pre>";
print_r($result);

echo "<br><hr></hr>Средний</br>";
$result2 = array_map(function ($user) {
    return ucwords($user['last_name'] . ',' . $user['first_name'], ', ');
}, $users);
print_r($result2);
$prepare = implode(', ', $result2,);
print_r($prepare);

echo "<br><hr></hr>Сложный</br>";