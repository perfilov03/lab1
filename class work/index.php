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
        // $a = 4.3;
        // // $b = 7.7;
        // // $c = '5.5';
        // // $d = '3.4кг';
        // $apple = 12;
        // // $format = 'У Даши %04d яблок';
        // // echo sprintf($format, $apple);

        // //echo (floor($a));
        // $b = 5;
        // echo ($apple%$b); // остаток
        // // echo (pow($b, $apple)); -степень
        // $fizan = 'фазан' ;
        // $sits = 'сидит';

        // echo 'Каждый'.' '.$fizan.' '.$sits;
        // echo "Каждый $fizan $sits - вот придурок!";


        // $quiter = 'Тише';
        // $go = 'едешь';
        // $further = 'дальше';

        // echo "$quiter $go - $further будешь";


        // $a = 2;
        // $b = '2';
        // $d = '2a' ;

        // var_dump($a > $b);
        // var_dump($a === $b);
        // var_dump($a === $d);
        // var_dump($a > $d);


        // $a = 2;
        // $b = 3;
        // $a and $b;
        // $a && $b;
        // $a or $b;
        // $a || $b;

        // var_dump(!$b);


        // $a = 3;
        // $b = $a++;
        // // echo $a;
        // //  echo $b;

        // $a > $b ? 'ok' : 'no';

        // $a = 148;
        // $b = '51';
        // echo ($a%$b)>0 ? gettype($a/$b) : $a.'/'.$b.'='.($a/$b);


    //     $c = -27;
    //     $b = 12;

    //     if (($c > 0) and ($b>0))
    // pow($c, $b)
    // else ()


        //!Массивы

        // $arr = array (1,2,3);
        // $arr1[0] = 1;
        // $arr1[1] = 2;
        // $arr1[2] = 3;

        // $arr2 = [1,2,3,4];
        // echo $arr.'<br>'; //echo не выводит массив
        // var_dump($arr1);
        // echo '<br>';
        // print_r($arr2);
        // echo '<br>';
        // print"$arr '<br>'"; //не выводит массив

        // $arr = array(12, 'hello', 3);
        // $arr[5]= 'ok';
        // // print_r($arr);

        // for ($i = 0; $i < 5; $i++){
        //     echo '\$arr[$i] = $arr[$i] <br>';
        // }

        // $arr = array('Привет', 'мир', '!');
        // $arr[1]= 'всем';
        // print_r($arr);

        // $arr = array('a', 'b', 'c', 'd');
        // echo "$arr[0] + $arr[1], ";

        // $arr['сезон'] = 'весна';
        // $arr['месяц'] = 'март';
        // $arr['день'] = '29';

        // $month = array(
        //     'сезон' => 'осень',
        //     'месяц' => 'сентЯбрь',
        //     'день' => '6',
        // );

        // foreach ($arr as $key => $value){
        //     echo "$key - $value <br>";
        // };


        // $arr = array ('html','css','php','js', 'iq');
        // foreach($arr as $key){
        //     echo "$key <br>";
        // }

        // $arr = array ('1','2','3','4', '5');
        // $result = 0;
        // foreach($arr as $key){
        //     $result += $key;
        // }
        // echo $result;
        // $arr[5] = 'Вторник';
        // $month[5] = 'Monday';
        // $result = $arr + $month;
        // print_r($result);

        // $arr = [1,2,3];
        // $arr2 = [2,1,3];
        // sort($arr2);
        // print_r($arr2);
        
        // echo array_pop($arr);
        // echo array_shift($arr);

        // array_push($arr, 11, 12);
        // print_r($arr);

        // $arr = [1,2,3,4,5];
        // print_r(array_reverse($arr));

        // $arr = array(
        //         'a' => '1',
        //         'b' => '2',
        //         'c' => '3',
        //     );
        // print_r(array_flip($arr));

        // $arr = array('a', 'b', 'c', 'd','e');
        // print_r(array_map('strtoupper', $arr));
        

        // $arr = array(
        //         'a' => '1',
        //         'месяц' => 'сентЯбрь',
        //         'день' => '6',
        //     );
        //     $key = array_rand($arr);
        //     print_r($arr[$key]);

        // $arr = array (
        //     array(1,2,3),
        //     array(4,5,6, 'семь'),
        //     array(8),
        // );
        // print_r($arr);
        // echo "<br>";
        // $arr[0][0]=3;
        // print_r($arr);
        // $sum = 0;
        //     $arr = [[1, 2, 3], [4, 5], [6]];
        //     foreach ($arr as $key) {
        //         $sum += array_sum($key);
        //     }
        //     print_r($sum);
        // $arr = [];
        // $k = 0;
        // for ($i = 0; $i < 3; $i++){
        //     for ($j = 0; $j < 3; $j++) {
        //         $k ++;
        //         $arr[$i][$j] = $k;
        //     };
        // };
        // print_r($arr);
        // $x = 4;
        // $y = 6;
        // sum($x);

        // function sum($a, $b=6){
        //     $result = $a + $b;
        //     return $result;
        // }

        // $x = 4;

        // function isEven($a){
        //     if ($a == 0){
        //         return 'НОЛЬ НЕ НАДА';
        //     } 
        //     if ($a % 2 == 0) {
        //         return true;
        //     }
        //     else {
        //         return false;
        //     };
        // }
        // var_dump(isEven($x));

        // $a = 2;
        // $b = f($a);

        // print "a=$a, b=$b<br>";
        // function f($c){
        //     $a = 5;
        //     $c++;
        //     print "a=$a<br>";
        //     $d = $a + $c;
        //     global $a;
        //     $a++;
        //     return $d;
        // };

        ?>
        <!-- <form action="main.php" method="POST">
            <input type="text" name="text">
            <?php
                // if (isset($_GET['email'])) $email = $_GET['email']; 
            ?>
            <input type="email" name="email" value="<?= $email; ?>">
            <button type="submit">Отправить</button>
        </form> -->
            <a href="index.php?int=13">Нажать</a>
            <?php
                if (isset($_GET['int'])) echo $_GET['int']
            ?>
</body>
</html>