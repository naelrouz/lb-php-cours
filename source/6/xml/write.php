<?php

require_once 'connection.php';

$sql = "SELECT products.id_product, products.name, products.mark, products.price, products.count, products.description, catalogs.name as category
        FROM products
        LEFT JOIN catalogs ON products.id_catalog = catalogs.id";

$result = $pdo->query($sql);
$records = $result->fetchAll(PDO::FETCH_ASSOC);
unset($pdo);

// создаем объект документа
$dom = new DOMDocument('1.0', 'UTF-8');
// создаем корневой элемент
$shop = $dom->createElement('shop');

$dom->appendChild($shop);

// создаем элемент с товарами
$products = $dom->createElement('products');
$shop->appendChild($products);

foreach($records as $record){
    $product = $dom->createElement('product');
    $attr_id = $dom->createAttribute('id');
    $attr_id->value = $record['id_product'];

    $product->appendChild($attr_id);

    // добавляем элемент название товара
    $product_name = $dom->createElement('title', $record['name']);
    $product->appendChild($product_name);

    // добавляем марку товара
    $product_mark = $dom->createElement('mark', $record['mark']);
    $product->appendChild($product_mark);

    // добавляем цену товара
    $product_price = $dom->createElement('price', $record['price']);
    $product->appendChild($product_price);

    // добавляем количество товара
    $product_count = $dom->createElement('count', $record['count']);
    $product->appendChild($product_count);

    // добавляем описание товара
    $product_description =  $dom->createElement('description', $record['description']);
    $product->appendChild($product_description);

    // добавляем описание товара
    $product_category =  $dom->createElement('category', $record['category']);
    $product->appendChild($product_category);

    $products->appendChild($product);
}

// сохраняем результат в файл
//$dom->save('catalog.xml');

// выводим на экран
header('Content-Type: text/xml');
echo $dom->saveXML();
