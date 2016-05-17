<?php /**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 17.05.2016
 * Time: 14:26
 */ ?>



<?php
echo '<h4>
        6. Рекурсивную функцию, принимающую два целых числа начальное
        значение и
        конечное значение. Например, первый аргумент 10, второй 35.
        Функция должна
        вывести на список нечетных чисел от 10 до 35.
    </h4>';


echo recursion(5,35);
function recursion($begin, $end)
{
    $counter = $begin;
    if ($counter <= $end) {
        echo ($counter%2) ? $counter . ' | ' : '';
        $counter++;
        recursion($counter,$end);
    } else {
        return $counter;
    }
}

echo '<p> Из примера </p> '; // Из примера
echo callself(5);
function callself($counter){
    if ($counter > 0) {
        echo ($counter--) . ' | ';
        callself($counter);
    } else {
        return $counter;
    }

}





