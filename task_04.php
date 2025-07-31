<?php

declare(strict_types = 1);
/*4. Сложные ассоциативные массивы
Исходный массив:
$students = [
  ['id' => 1, 'name' => 'Ivan', 'scores' => [80, 75, 90]],
  ['id' => 2, 'name' => 'Maria', 'scores' => [95, 92, 88]],
  ['id' => 3, 'name' => 'Petr', 'scores' => [70, 65, 78]],
  ['id' => 4, 'name' => 'Anna', 'scores' => [90, 93, 91]],
];
 • Простой уровень: Вывести имя и оценки каждого студента (одной строкой).
 • Средний уровень: Вычислить средний балл каждого студента и добавить его как новое поле 'avg'.
 • Hard: Найти имя студента с самым высоким средним баллом и вывести его имя и средний балл.
*/
$students = [
  ['id' => 1, 'name' => 'Ivan', 'scores' => [80, 75, 90]],
  ['id' => 2, 'name' => 'Maria', 'scores' => [95, 92, 88]],
  ['id' => 3, 'name' => 'Petr', 'scores' => [70, 65, 78]],
  ['id' => 4, 'name' => 'Anna', 'scores' => [90, 93, 91]],
];
echo "Простой <br>";
foreach ($students as $student) {
    if (is_array($student['scores'])) {
        $stringScores = implode(', ', $student['scores']);
        echo "Имя: $student[name] Оценки: $stringScores<br>";
    }
}

echo "<hr> Средний <br>";
foreach ($students as &$student) {
    $sum = array_sum($student['scores']);
    $avgScores = $sum / count($student['scores']);
    $avg = round($avgScores, 2);
    $student['avg'] = $avg;
    echo $student['name'] . ' средний балл: - ' . $avg . '<br>';
}
unset($student);
//echo "<pre>";
//var_dump($students);

echo "<hr>Сложный уровень:<br>";
$bestAvg = 0;
$bestStudent = null;
foreach ($students as $student) {
    if ($student['avg'] > $bestAvg) {
        $bestAvg = $student['avg'];
        $bestStudent = $student['name'];
    }
}
echo "Лучший студент: $bestStudent (средний балл: $bestAvg)";