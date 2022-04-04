<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset(echo $_POST['text'])) echo 'ok<br>';
        else echo 'not';
        echo $_POST['email'];
    ?>
    <a href="index.php?email=<?= $_POST['email'];?>"> Отпраить еще раз </a>
</body>
</html>