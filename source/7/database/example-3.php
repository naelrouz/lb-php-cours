<?php

require_once 'connection.php';

$sql = "CALL spGetAllProducts()";
$stmt = $pdo->prepare($sql);

$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1" style="border-collapse: collapse;">
             <thead>
                <th style="padding: 5px;">Название товара</th>
                <th style="padding: 5px;">Марка товара</th>
                <th style="padding: 5px;">Количество</th>
                <th style="padding: 5px;">Цена (за шт.)</th>
                <th style="padding: 5px;">Описание</th>
                <th style="padding: 5px;">Категория</th>
            </thead>';

foreach($records as $product){
    echo <<<PRODUCT
            <tr>
                <td style="padding: 5px;">{$product["name"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["mark"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["count"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["price"]}</td>
                <td style="padding: 5px;">{$product["description"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["catalog"]}</td>
            </tr>
PRODUCT;

}
