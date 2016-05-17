<?php /**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 17.05.2016
 * Time: 13:33
 */ ?>

<meta charset="UTF-8">
<h4>
    5. Функция, принимающая в качестве аргумента массив чисел вида: <br> 1, 22, 5, 66, 3, 57
    и возвращает массив по возрастанию: <br> 1, 3, 5, 22, 57, 66
</h4>

<?php

$arr = [1, 22, 5, 66, 3, 57]; echo '<p>Исходный массив';
foreach ($arr as $item){
    echo '<br>' . $item;
}
$arrSort = $arr;
sort($arrSort, SORT_NUMERIC); echo '<p>Функция sort()';
//var_dump($arrSort);
foreach ($arrSort as $item){
    echo '<br>' . $item;
}

$arrSortUF = sortUF($arr);  echo '<p>Функция "Сортировка выбором"';
foreach ($arrSortUF as $item){
    echo '<br>' . $item;
}


function sortUF($arr)
{
    $size = count($arr);
    for($i = 0; $i < $size; ++$i) // i - номер текущего шага
    {
        $pos = $i;
        $tmp = $arr[$i];
        for($j = $i + 1; $j < $size; ++$j) // цикл выбора наименьшего элемента
        {
            if ($arr[$j] < $tmp)
            {
                $pos = $j;
                $tmp = $arr[$j];
            }
        }
        $arr[$pos] = $arr[$i];
        $arr[$i] = $tmp; // меняем местами наименьший с a[i]
    }
    return $arr;
}
