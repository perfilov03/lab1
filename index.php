<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Лабораторная №1
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $title = 'Задание для самостоятельной работы «Hello, World!»';
            $lab = 'Стримим Леди Икону!';
            $icon = '<img class="iconic" alt="icon" src="icon.jpg">';
        ?>
        <header>
            <img src="мосполитех.jpg" alt="logo"">
            <h1>
                <?php 
                echo $title; 
                ?>
            </h1>
        </header>
        <main>
            <p class="stream">
                <?php 
                echo $lab; 
                ?>
            </p>
            <?php 
                echo $icon; 
            ?>
        </main>
        <footer>
            <p class="ft">
                Задание для самостоятельной работы
            </p>
        </footer>
    </div>
</body>
</html>