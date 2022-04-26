<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сессии</title>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['c'])) {
            echo "Ваша страна ".$_SESSION['c'];
        }
        else {
            echo "Ошибка";
        }
    ?>
</body>
</html>