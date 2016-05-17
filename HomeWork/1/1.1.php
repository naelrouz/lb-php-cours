<?php
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 16.05.2016
 * Time: 15:56
 */


echo '<h3>Домашнее задание №1</h3>';
echo '<h4>1. Функция, принимающая массив строк и выводящая каждую строку в отдельном
параграфе.</h4>';

function wrapToP($arr)
{
    $count = count($arr);
    for($i = 0; $i <= $count-1; $i++){
        echo '<p>'. $arr[$i] .'</p>';
    }
}

$arr = ['Hello','World','!!!'];
wrapToP($arr);
