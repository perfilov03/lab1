<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перфилов Алексей, 211-322, калькулятор</title>
</head>
<body>
    <header>
        <h1>Перфилов Алексей</h1>
    </header>
    <main id='main'>
        <form method="POST" action="index.php" class="form">
            <input id="input" type="text" name="input">
            <input id="submit-btn" type="submit" value="=">
            <input <?php
            if ((!isset ($_GET['answer']) && (!isset($_GET['error'])))) {
                echo 'class="invisible"';
            }
            ?>
            value="reset" id="reset-btn" type="button" onclick='document.location="index.php"'>
            <div class="buttons">
                <button class="button" onclick="cl('1')">1</button>
                <button class="button" onclick="cl('2')">2</button>
                <button class="button" onclick="cl('3')">3</button>
                <button class="button" onclick="cl('4')">4</button>
                <button class="button" onclick="cl('5')">5</button>
                <button class="button" onclick="cl('6')">6</button>
                <button class="button" onclick="cl('7')">7</button>
                <button class="button" onclick="cl('8')">8</button>
                <button class="button" onclick="cl('9')">9</button>
                <button class="button" onclick="cl('0')">0</button>
            </div>
        </form>
        <?php
            if (isset(($_POST['input']))) {
                echo '<p class="invisible" id="expression">'. $_POST['input'] .'</p>';
            }
            if (isset(($_GET['answer']))) {
                echo '<p class="answer" id="answer">'. $_GET['exp'] . " = " .$_GET['answer']  .'</p>';
            }
            if (isset(($_GET['error']))) {
                echo '<p class="error" id="error">Error 505</p>';
            }
        ?>
    </main>
    <script src="add.js"></script>
</body>
</html>