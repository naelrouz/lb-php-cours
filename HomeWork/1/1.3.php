<?php
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 17.05.2016
 * Time: 11:16
 */

echo '<h4>3. Функция, принимающая переменное число аргументов, но первым аргументов
обязательно должна быть строка, обозначающее арифметическое действие,
которое необходимо выполнить со всеми передаваемыми аргументами.</h4>';

$actionString = '/';
echo calculate(6,2,0, $actionString);

function calculate($actionString = false)
{
    $size = func_num_args() - 1;
    $result = func_get_arg(0);
    $actionString = func_get_arg($size);

    switch ($actionString) {
        case '+': // Перебор массива и суммирование чисел
        {

            for ($i = 1; $i < $size; $i++) {
                $result += func_get_arg($i);
            }
            return $result;
        }
            break;

        case '-': // Перебор массива и вычитание чисел
        {
            for ($i = 1; $i < $size; $i++) {
                $result -= func_get_arg($i);
            }
            return $result;
        }
            break;

        case '*': // Перебор массива и вычитание чисел
        {
            for ($i = 1; $i < $size; $i++) {
                $result *= func_get_arg($i);
            }
            return $result;
        }
            break;

        case '/':   //  // Перебор массива и деление чисел
        {
            for ($i = 1; $i < $size; $i++) {
                {
                    if (func_get_arg($i) != 0) {
                        $result /= func_get_arg($i);
                    } else {
                        $result = 'На ноль делить нельзя';
                        break;
                    }

                }
            }
            return $result;
        }
            break;

        default: {
            return 'Данного действия не предусмотрено.';
        }
    }

}