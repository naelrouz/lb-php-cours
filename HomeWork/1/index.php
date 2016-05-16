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




echo '<h4>2. Функция, принимающая 2 параметра массив
чисел и строку, обозначающую арифметическое действие, которое нужно выполнить со всеми элементами
массива. Функция должна выводить результат на экран.</h4>';

function calculate($arrayNumbers, $actionString = '+')
{
    $result = 0;

    switch ($actionString) {
        case '+':
        {
            foreach ($arrayNumbers as $item) {
                $result += $item;
            }
            return $result;
        }
            break;
        case '-':
        {
            foreach ($arrayNumbers as $item) {
                $result -= $item;
            }
            return $result;
        }
            break;
        case '*':
        {
            foreach ($arrayNumbers as $item) {
                $result *= $item;
            }
            return $result;
        }
            break;
        case '/':
        {
            foreach ($arrayNumbers as $item) {
                $result /= $item;
            }
            return $result;
        }
            break;
        default:
        {
            return 'Данного действия не предусмотрено ';
        }
    }

}



$arrayNumbers =[4,2];
$actionString = '/';
echo calculate($arrayNumbers,$actionString);