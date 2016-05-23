<?php

$name = $_POST['name'];
$mark = $_POST['mark'];
$price = (double)$_POST['price'];
$count = (int)$_POST['count'];
$description = $_POST['description'];
$category = (int)$_POST['category'];

require_once '../connection.php';
$sql = "INSERT INTO products (name, price, count, mark, description, id_catalog)
        VALUES(:name, :price, :count, :mark, :description, :category)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':count', $count, PDO::PARAM_INT);
$stmt->bindParam(':mark', $mark);
$stmt->bindParam(':description', $description, PDO::PARAM_STR);
$stmt->bindParam(':category', $category, PDO::PARAM_INT);

header("Content-Type: application/json");
$data = null;
if($stmt->execute()){
    $data = array(
        'result' => array(
            'status' => 0,
            'message' => 'OK',
            'data' => array(
                'name' => $name,
                'count' => $count,
                'price' => $price,
                'mark' => $mark,
                'description' => $description
            )
        )
    );
} else {
    $data = array(
        'result' => array(
            'status' => 200,
            'message' => 'ERROR to database'
        )
    );
}

echo json_encode($data);

