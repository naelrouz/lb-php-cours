<?php /**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 17.05.2016
 * Time: 14:26
 */ ?>

    <h4>
        6. Рекурсивную функцию, принимающую два целых числа начальное
        значение и
        конечное значение. Например, первый аргумент 10, второй 35.
        Функция должна
        вывести на список нечетных чисел от 10 до 35.
    </h4>

<?php

//echo recursion(5,10);
function recursion($begin, $end)
{
    $counter = $begin;
    if ($counter < $end) {
        echo ($counter++) . ' | ';
        callself($counter);
    } else {
        return $counter;
    }
}

// Из примера
echo callself(5); echo '<br> Из примера';
function callself($counter){
    if ($counter > 0) {
        echo ($counter++) . ' | ';
        callself($counter);
    } else {
        return $counter;
    }

}





