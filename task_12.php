<?php

declare(strict_types = 1);
/*12. Удаление дубликатов — array_unique

Массив:

$emails = [
  'test@example.com', 'john@example.com', 'admin@example.com',
  'test@example.com', 'user@example.com', 'admin@example.com'
];

 • Простой уровень: Удалить повторяющиеся email’ы с помощью array_unique.
 • Средний уровень: Подсчитать количество повторов каждого email перед удалением.
 • Hard: Вывести уникальные email’ы, отсортировав их по длине строки (от меньшего к большему).
*/
$emails = [
    'test@example.com', 'john@example.com', 'admin@example.com',
    'test@example.com', 'user@example.com', 'admin@example.com'
];
$uniqueEmails = array_unique($emails);
print_r($uniqueEmails);