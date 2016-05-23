<?php
ini_set('session.cookie_httponly', true);
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if((!isset($_SESSION['token'])) || ($_SESSION['token'] != $_POST['token'])){
        echo "Заново введите свои данные";
    } else {
        echo "Все ок";
    }

} else {
    echo "Заново заполните форму";
}