<?php

require_once 'connection.php';
$sql = "SELECT products.id_product, products.name, products.mark, products.price, products.count, products.description,
        catalogs.name as category
        FROM products
        LEFT JOIN catalogs ON products.id_catalog = catalogs.id";

$result = $pdo->query($sql);
$records = $result->fetchAll(PDO::FETCH_ASSOC);
unset($pdo);



$csv = fopen('data.csv', 'w');
fputcsv($csv, array('ID', 'Название', 'Марка', 'Цена', 'Количество', 'Описание', 'Категория'), ';');

foreach ($records as $fields) {
    fputcsv($csv, $fields,';');
}

fclose($csv);