<?php

//try{
    $pdo = new PDO('mysql:dbname=lb-shop;host=localhost', 'mysql', 'mysql');
    $pdo->query('SET NAMES "UTF-8"');



//} catch(PDOException $exc){
//    echo "Возникла ошибка при работе с БД: ".$exc->getMessage();
//}

