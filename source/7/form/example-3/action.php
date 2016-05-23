<?php

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Email указан корректно";
} else {
    echo "Введите корректный email адрес";
}