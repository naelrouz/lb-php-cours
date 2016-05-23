<?php
session_start();
$_SESSION['token'] = md5(uniqid(mt_rand(), true));
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма контактов</title>
    <style type="text/css">
        div{
            margin: 0 0 10px;
        }

        label{
            display: block;
        }
    </style>
</head>
<body>

    <form action="action.php" method="post">
        <div>
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" placeholder="Укажите имя" >
        </div>
        <div>
            <label for="lastnname">Фамилия</label>
            <input type="text" name="lastname" id="lastname" placeholder="Укажите фамилию" >
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
        </div>
        <div>
            <input type="submit" value="Отправить">
        </div>
    </form>

</body>
</html>
