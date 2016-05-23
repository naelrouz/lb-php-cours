<?php

require_once 'connection.php';

try{
    $id = 1;

    $sql = "SELECT products.id_product as id, products.name as title, products.mark,
        products.price, products.count, products.description, catalogs.name
        FROM products
        JOIN catalogs ON products.id_catalog = catalogs.id
        WHERE products.id_catalog = :catalog";

    if($stmt = $pdo->prepare($sql)){

        $stmt->bindParam(':catalog', $id, PDO::PARAM_INT);
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
                <td style="padding: 5px;">{$product["title"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["mark"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["count"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["price"]}</td>
                <td style="padding: 5px;">{$product["description"]}</td>
                <td style="padding: 5px; text-align: center;">{$product["name"]}</td>
            </tr>
PRODUCT;

        }


    }


}catch (PDOException $e){

}
