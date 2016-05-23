<?php

    function clearInput($data, $type = 's'){

        switch($type){
            case 'i+':
                $data = abs((int)$data); break;
            case 'i':
                $data = (int)($data); break;
            case 'd':
                $data = (double)$data; break;
            case 's':
                $data = trim(strip_tags($data)); break;

        }

        return $data;

    }

    $q = clearInput($_GET['q'], 's');


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пример XSS</title>
</head>
<body>

    <?php if(!empty($q) || $q == 0): ?>
        <h1>Результаты запроса</h1>
        <?php echo $q; ?>
    <?php endif; ?>

<form action="<?php echo $_SESSION['PHP_SELF']; ?>">
    <input type="text" name="q" placeholder="Начните поиск">
    <input type="submit" value="Найти">
</form>

</body>
</html>