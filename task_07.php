<?php

declare(strict_types = 1);
/*7. Методы array_key_exists и in_array

Исходный массив:

$data = [
  'id' => 42,
  'status' => 'active',
  'role' => 'editor',
  'permissions' => ['read', 'write', 'delete']
];

 • Простой уровень: Проверить, существует ли ключ 'status' в массиве.
 • Средний уровень: Проверить, есть ли значение 'delete' в массиве 'permissions'.
 • Hard: Если ключ 'permissions' существует и содержит 'write', вывести Разрешено писать.
*/
$data = [
    'id' => 42,
    'status' => 'active',
    'role' => 'editor',
    'permissions' => ['read', 'write', 'delete']
];
echo "Простой <br>";
var_dump(array_key_exists('status', $data));
echo "<br>";
print_r(array_key_exists('status', $data));

echo "<br><hr>Средний<br>";
$res = in_array('delete', $data['permissions']);
echo $res;

echo "<br><hr>Сложный<br>";
if (array_key_exists('permissions', $data) && in_array('write', $data['permissions'])) {
   echo "Разрешено писать!!!";
}