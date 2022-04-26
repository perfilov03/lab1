<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сессии</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Ваши данные</h1>
        <p>Страна:<input type="text" name="country"></p>
        <p><input type="submit" value="Сохранить"></p>
    </form>
    <?php
        session_start();
        $c = $_POST['country'];
        if (isset($c)) {
            $_SESSION['c']=$c;
        }
    ?>
    <a href="test.php">Смотреть</a>
</body>
</html>