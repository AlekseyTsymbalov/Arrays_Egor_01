<?php

declare(strict_types = 1);
/*11. Функция keyBy — изменение ключей массива

Исходный массив:

$books = [
  ['isbn' => '978-5-699-12014-6', 'title' => 'Clean Code', 'author' => 'Robert C. Martin'],
  ['isbn' => '978-0-13-235088-4', 'title' => 'Refactoring', 'author' => 'Martin Fowler'],
  ['isbn' => '978-1-59327-584-6', 'title' => 'The Art of Exploitation', 'author' => 'Jon Erickson'],
];

 • Простой уровень: Реализовать функцию keyBy($array, 'isbn') — ключами будут ISBN.
 • Средний уровень: Использовать ключ 'title' как ключ массива, значения — полные элементы.
 • Hard: Сделать функцию keyBy, которая добавляет -1, -2 и т.п. при дублирующихся ключах (на основе title).
*/
$books = [
    ['isbn' => '978-5-699-12014-6', 'title' => 'Clean Code', 'author' => 'Robert C. Martin'],
    ['isbn' => '978-0-13-235088-4', 'title' => 'Refactoring', 'author' => 'Martin Fowler'],
    ['isbn' => '978-1-59327-584-6', 'title' => 'The Art of Exploitation', 'author' => 'Jon Erickson'],
];
