<?php

if(filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT) && filter_input(INPUT_POST, 'height', FILTER_VALIDATE_FLOAT)){
    echo "Данные были введеный КОРРЕКТНО";
} else {
    echo "Проверьте правильность ввода ваших данных";
}