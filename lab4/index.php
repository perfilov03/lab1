<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Уравнение Перфилов Алексей 211-322 (7 вар)
    </title>
</head>
<body>
    <?php

        function calc($f, $s){
            return $f - $s;
        }

        function equation($equation){
            $str = explode(' ', $equation); //разбиение
            $var = array_search('x', $str); //возвращает ключ
            if ($var == 0) return calc($str[4], $str[2]); // если X первый 
            if ($var == 2) return calc($str[4], $str[0]); // если X второй (индекс 2 тк знак тоже идет в счет)
        }

        $ans1 = equation('x + 10 = 33');
        $ans2 = equation('33 + x = 20');
        echo "X = $ans1";
        echo "<br>";
        echo "X = $ans2";
    ?>
</body>
</html>