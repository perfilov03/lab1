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
    <header class="header">
        <img src="polytech.png" alt="logo" class="logo">
        <h1 class="logtxt">
            Feedback form
        </h1>
    </header>
    <main class="page signUp">
        <article class="signUp__description description">
            <h1 class="description__title">
                Леди Икона на связи
            </h1>
            <p class="description__text">
                Отправь свой вопрос мамочке монстров и получи альбом Chromatica в подарок !
            </p>
        </article>
        <form action="//httpbin.org/post" method="post" class="signUp__form form">
            <label for="FirstName" class="form__data data">
                Ваше имя
            </label>
            <input class="data__text" id="FirstName" type="text" name="First Name" placeholder="Введи свое имя">
            <label for="mail" class="form__data data">
                Ваш E-mail
            </label>
            <input class="data__text" id="mail" type="email" name="mail" placeholder="Введите почту">
            <label for="LoveAlbum" class="form__data data">
                Тип обращения
            </label>
            <select class="data__text" id="LoveAlbum" name="LoveAlbum">
                <option selected disabled="disabled">Тип обращения</option>
                <option value="TFM">Жалоба</option>
                <option value="TFM">Предложение</option>
                <option value="BTW">Благодарность</option>
            </select>
            <label for="" class="form-label">Текст обращения</label>
            <textarea class="area" name="" id="" rows="7"></textarea>
            <span class="sex__name">
                Вариант ответа
            </span>
            <span class="sex__variant">
                <label>
                    <input class="sex__radio" type="radio" name="sex" value="man">
                    <span class="sex__text">
                        SMS
                    </span>
                </label>
                <label>
                    <input class="sex__radio" type="radio" name="sex" value="woman">
                    <span class="sex__text">
                        E-Mail
                    </span>
                </label>
            </span>
            <div class="form__button button">
                <button class="button__submit" type="submit">
                    Отправить
                </button>
                <a href="form.php" class="button__submit" type="submit">
                    Перейти
                </a>
            </div>
        </form>
    </main>
    <footer class="footer">
        <p class="ft">
            Задание для самостоятельной работы «Feedback form»
        </p>
    </footer>
</body>
</html>