<?php

if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    echo "Email указан корректно";
} else {
    echo "Введите корректный email адрес";
}