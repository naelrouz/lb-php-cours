<?php

if(filter_has_var(INPUT_POST, 'hobbies')){
    echo "Данные приняты";
} else {
    echo "Вы не указали свои увлечения";
}