<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
</head>
<body>
    <form action="action.php" method="post">
        <div>
            <input type="text" name="name" placeholder="Укажите имя"><br />
            <div style="margin-top: 10px;">
                <div>Укажите ваши увлечения:</div>
                <label for="football">Футбол</label>
                <input type="checkbox" name="hobbies[]" value="football" id="football">

                <label for="hockey">Хоккей</label>
                <input type="checkbox" name="hobbies[]" value="hockey" id="hockey">

                <label for="swimming">Плавание</label>
                <input type="checkbox" name="hobbies[]" value="swimming" id="swimming">

                <label for="basketball">Баскетбол</label>
                <input type="checkbox" name="hobbies[]" value="basketball" id="basketball">

                <label for="other">Другое</label>
                <input type="checkbox" name="hobbies[]" value="other" id="other">
            </div>

            <div>
                <input type="submit" value="Отправить">
            </div>
        </div>
    </form>
</body>
</html>