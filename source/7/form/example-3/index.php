<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
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
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="lastname">Фамилия</label>
            <input type="text" name="lastname" id="lastname">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <input type="submit" value="Отправить">
        </div>

    </form>

</body>
</html>