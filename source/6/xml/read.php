<?php

if(file_exists('products.xml')){
    $xml = simplexml_load_file('products.xml');
    foreach ($xml->category as $category) {
        $attrs = $category->attributes();
        echo "<h3>{$category->title} - категория №{$attrs['id']}</h3>";

        echo "<table border='1' style='border-collapse: collapse;'>
            <thead>
                <th>Название</th>
                <th>Цвет</th>
                <th>Цена</th>
                <th>Количество (шт.)</th>
            </thead>
        ";

        foreach($category->products->product as $product){
            echo "<tr>
                <td style='padding: 5px;'>{$product->title}</td>
                <td style='padding: 5px; text-align: center;'>{$product->color}</td>
                <td style='padding: 5px; text-align: center;'>{$product->price}</td>
                <td style='padding: 5px; text-align: center;'>{$product->count}</td>
                </tr>";
        }
        echo "</table>";

    }
} else {
    echo 'Такого файла не существует';
}

