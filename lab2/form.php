<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Перфилов Алексей, 211-322
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        $url = 'https://httpbin.org';
        $answer = get_headers($url);
    ?>
    <header class="header">
        <img src="polytech.png" alt="logo" class="logo">
        <h1 class="logtxt">
            Feedback form
        </h1>
    </header>
    <main class="page signUp">
        <article class="signUp__description description">
            <h1 class="description__title">
                Леди Икона ответила!
            </h1>
            <p class="description__text">
                Результат работы функции get_headers:
            </p>
        </article>
        <form action="//httpbin.org/post" method="post" class="form--ft">
            <textarea class="area--ft" name="" id="" rows="13">
                <?php
                    print_r($answer);
                ?>
            </textarea>
        </form>
    </main>
    <footer class="footer">
        <p class="ft">
            Задание для самостоятельной работы «Feedback form»
        </p>
    </footer>
</body>
</html>