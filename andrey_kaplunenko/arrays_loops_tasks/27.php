<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/26/18
 * Time: 10:40 AM
 */
/*
 * 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета,
 * выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
 * */

/*
 * В теории, лучше сделать так чтобы аргументы (кол-во строк и столбцов, и возможно другие параметры) задавались пользователем
 * в процессе выполнения программы, но сейчас не будем с этим заморачиваться, и просто зададим переменные вручную. А для генерации дугих таблиц
 * просто будем их менять.
 * */

$rows = 10; //кол-во строк
$cols = 20; //кол-во столбцов
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$number_of_colors = count($colors);

echo "<table>".PHP_EOL;
for ($j=0; $j<$rows; $j++)
{
    echo "<tr>".PHP_EOL;
    for ($i=0; $i<$cols; $i++) {
        echo "<td style=\"background-color:".$colors[rand(0, $number_of_colors-1)]."\">".((string)rand(0, 1000))."</td>";
}
echo PHP_EOL."</tr>".PHP_EOL;
}
echo "</table>".PHP_EOL;