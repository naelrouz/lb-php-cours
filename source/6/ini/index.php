<?php

if(!file_exists('data.ini')){
    die('THE END');
}

$data = parse_ini_file('data.ini', true);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['interface']['title']; ?></title>
    <link rel="stylesheet" href="/jslibs/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $data['interface']['title']; ?></h1>

        <form action="">
            <div class="form-group">
                <label for="count"><?php echo $data['interface']['field_name']; ?></label>
                <input type="text" class="form-control" id="count" name="count" placeholder="Укажите имя">
            </div>

            <div class="form-group">
                <label for="count"><?php echo $data['interface']['field_lastname']; ?></label>
                <input type="text" class="form-control" id="count" name="count" placeholder="Укажите фамилию">
            </div>

            <div class="form-group">
                <label for="count"><?php echo $data['interface']['field_password']; ?></label>
                <input type="password" class="form-control" id="count" name="count">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"><?php echo $data['interface']['lable_button']; ?></button>
            </div>
        </form>
    </div>



</body>
</html>
