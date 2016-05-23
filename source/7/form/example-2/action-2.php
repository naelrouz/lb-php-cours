<?php

if(!empty($_POST['age'])){
    if(filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT)){

        if(filter_var($_POST['age'], FILTER_VALIDATE_INT, [
            "options" => [
                "min_range" => 18, "max_range" => 80
            ]
        ]
        )){
            echo "Возраст введен корректно";
        } else {
            echo "Возраст должен быть от 18 до 80 лет";
        }

    } else {
        echo "Возраст должен быть целым числом";
    }
} else {
    echo "Поле возраст обязательно для заполнения";
}
