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

$arrayNumbers =[6,6];
$actionString = '/';
echo calculate($arrayNumbers,$actionString);

function calculate($arrayNumbers, $actionString = false)
{
    function add($arrayNumbers){
        $result = $arrayNumbers['0'];
        $count = count($arrayNumbers);
        for ($i = 1; $i < $count; $i++) {
            $result += $arrayNumbers[$i];
            return $result;
        }
    }

    switch ($actionString)
    {
        case '+':
        {
            $result = $arrayNumbers['0'];
            $count = count($arrayNumbers);
            for ($i = 1; $i < $count; $i++)
            {
                $result += $arrayNumbers[$i];
            }
            return $result;

        }
            break;

        case '-':
        {
            $result = $arrayNumbers['0'];
            $count = count($arrayNumbers);
            for ($i = 1; $i < $count; $i++)
            {
                $result -= $arrayNumbers[$i];
            }
            return $result;
        }
            break;

        case '*':
        {
            $result = $arrayNumbers['0'];
            $count = count($arrayNumbers);
            for ($i = 1; $i < $count; $i++)
            {
                $result *= $arrayNumbers[$i];
            }
            return $result;
        }
            break;

        case '/':
        {
            $result = $arrayNumbers['0'];
            $count = count($arrayNumbers);
            for ($i = 1; $i < $count; $i++)
            {
                if($arrayNumbers[$i] != 0)
                {
                    $result /= $arrayNumbers[$i];

                }else
                    {
                    $result = 'На ноль делить нельзя';
                    break;
                    }

            }
            return $result;
        }
            break;

        default:
        {
            return 'Данного действия не предусмотрено.';
        }
    }

}

