<?php
    $q = $_GET['q'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пример XSS</title>
</head>
<body>

    <?php if(!empty($q)): ?>
        <h1>Результаты запроса</h1>
        <?php echo $q; ?>
    <?php endif; ?>

<form action="<?php echo $_SESSION['PHP_SELF']; ?>">
    <input type="text" name="q" placeholder="Начните поиск">
    <input type="submit" value="Найти">
</form>

</body>
</html>