<?php
// Автозагрузка классов

// Старый подход
//include_once 'components/Autoload_old.php';
// Современный подход
include_once 'components/Autoload.php';


$man = new Man('Nael','28');
$man->getInfo();

$car1 = new Car();
$car1->displayWheelsNumber();