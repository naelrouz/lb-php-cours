<?php

try{
    $pdo = new PDO('mysql:dbname=shop;host=localhost', 'root', '');
    $pdo->query('SET NAMES "UTF-8"');



} catch(PDOException $exc){
    echo "Возникла ошибка при работе с БД: ".$exc->getMessage();
}

