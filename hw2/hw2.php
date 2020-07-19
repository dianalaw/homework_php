<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Task 1 
        $a = 9;

        if ($a == 10) {
            echo 'Верно';
        } else {
            echo 'Неверно';
        }
        echo '<hr />';

    //Task 2 
        //$a = '1';
        //$a = 1;
        $a = 3;

        if ($a === '1') {
            echo 'Верно';
        } else {
            echo 'Неверно';
        }
        echo '<hr />';

    //Task 3 
        //$a = 1;
        //$a = 3;
        //$a = -3;
        //$a = 0;
        //$a = NULL;
        //$a = true;
        //$a = '';
        $a = '0';

        if ($a == 0) {
            echo 'Верно';
        } else {
            echo 'Неверно';
        }
        echo '<hr />';

    //Task 4
        //$a = 3;
        $a = NULL;

        var_dump(isset($a));
        if ($a == true) {
            echo 'Верно';
        } else {
            echo 'Неверно';
        }
        echo '<hr />';

    //Task 5
        $a = 8;

        //echo $a % 3;
        echo $a % 5;
        echo '<hr />';
        
    //Task 6
        $number = 3;

        if ($number > 10) {
            echo $number + 100;
        } else {
            echo $number - 30;
        }
        echo '<hr />';

    //Task 7 
        $numb = '378';

        $numb[1] = '0';
        echo $numb;
        echo '<hr />';

    //Task 8 
        //$a = 5;
        //$a = 0;
        //$a = -3;
        $a = 2;
        
        if ($a > 0 && $a < 5) {
            echo 'Верно';
        } else {
            echo 'Неверно';
        }
        echo '<hr />';

    //Task 9
        //$a = 1;
        //$b = 3;

        //$a = 0;
        //$b = 6;

        $a = 3;
        $b = 5;

        if ($a <= 1 && $b >= 3) {
            echo $a + $b;
        } else {
            echo $a - $b;
        }
        echo '<hr />';

    //Task 10 
        $num1 = 3;
        $num2 = 9;
        $num3 = 20;

        $mid = ($num1 + $num2 + $num3) / 3;
        echo $mid . '<br />';

        $minus = ($num1 + $num3) * 2 - $num2 * 3;
        echo $minus;
        echo '<hr />';

    //Task 11
        $temp = 21;
        echo " {$temp} Celcius <br />" ;
        $fr = $temp * 1.8 +32;
        echo " {$fr} Fahrenheit";
        echo '<hr />';

    //Task 12
        $string = 'abcde';

        if ($string[0] == 'a') {
            echo 'Да';
        } else {
            echo 'Нет';
        }
        echo '<hr />';

    //Task 13
        $numb1 = 9;
        $numb2 = 11;

        if ($numb1 > 30 or $numb2 > 30) {
            echo 'yes';
        } else {
            echo 'no';
        }
        echo '<hr />';

    //Task 14
        $Num1 = 6;
        $Num2 = 8;
        $Num3 = 36;
        $Num4 = 33;

        if ( $Num1 > 5 && $Num2 > 5 && !($Num3 % 6) && $Num4 % 3) {
            echo 'yes';
        } else {
            echo 'no';
        }
        echo '<hr />';
        
    //Task 15
        for ($i = 1; $i<=10; $i++) {
            echo 'You are welcome! <br />';
        }
        echo '<hr />';

    //Task 16 
        $numbers='123123';
        if ($numbers[0] + $numbers[1] + $numbers[2] == $numbers[3] + $numbers[4] + $numbers[5]) {
            echo 'да';
        } else {
            echo 'нет';
        }
        echo '<hr />';

    //Task 17   
        $a = -14;
        $b = -9;
        $c = 46;

        if ($a > 0 && $b > 0 && $c > 0) {
            echo 'Три положительных числа';
        } else if ($a < 0 && $b < 0 && $c < 0) {
            echo 'Ноль положительных чисел';
        } else if ($a < 0 xor $b < 0  xor $c < 0) {
            echo 'Два положительных числа';
        } else {
            echo 'Одно положительное число';
        }
        echo '<hr />';

    //Task 18 
        $num = 3;

        switch ($num) {
            case 1:
                echo 'зима';
            break;
            case 2:
                echo 'лето';
            break;
            case 3:
                echo 'осень';
            break;
            case 4:
                echo 'весна';
            break;
        }
        echo '<hr />';

    //Task 19  
        $year = 1700;

        if ($year / 4 && $year % 100 or !($year % 400)) {
            echo 'Високосный год';
        } else {
            echo 'Невисокосный год';
        }
        echo '<hr />';

    //Task 20
        $lang = 'en';
        $arrru = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
        $arren = ['Mon', 'Tue', 'Wed', 'Thu', 'Fr', 'Sat', 'Sun'];

        if ($lang =='ru') {
            print_r ($arrru);
        } else if ($lang == 'en') {
            print_r ($arren);
        }
        echo '<hr />';

    //Task 21
        $degree = 90;
        $hours = $degree / 30;
        echo "Прошло {$hours}ч";
        echo '<hr />';

    //Task 22 ???
        /*for ($i = 0; $i <= 60) {
            if ($i >= 0 && $i <= 3);
        }*/

    //Task 23 
        $sum = 0;

        for ($i=20; $i <= 45; $i++) {
            if ($i % 5 == 0) $sum += $i;
        }
        echo $sum;
        echo '<hr />';
    
    //Task 24 don't know 

    //Task 25 
        for ($i=1; $i<=100; $i++) {
            echo $i . '<br />';
        }
        echo '<hr />';

    //Task 26
        $numbr = 12345;
        $str = (string)$numbr;
        for ($i = 1; $i < 5; $i += 2) {
            $str[$i] = 0;
        } 
        echo $str; 
        echo '<hr />';

    //Task 27 
    for ($i=11; $i<=33; $i++) {
        echo $i . '<br />';
    }
    echo '<hr />';
    
    //Task 28
        $number3 = 123;
        $number3 = (string)$number3;
        $number3_first = $number3[0];
        $number3_last = $number3[2];
        $number3[2] = $number3_first;
        $number3[0] = $number3_last;
        echo $number3;
        echo '<hr />';

    //Task 29
       $count = 0;
       
        for ($num = 1000; $num >= 50; $num /= 2) {
            $count++;
        }   
        echo $count;
        echo '<hr />';

    //Task 30 
        $num = '442158755745';
        $count = 0;

        for ($i = 0; $i <= 12; $i++) {
            if ($num[$i] == '5') $count++ ;
        }
        echo $count;
        echo '<hr />';

    //Task 31
        $a = 5;
        $b = 8;
        
        for ($i = 1; $i <= $a; $i++) {
            for ($j = 1; $j <= $b; $j++) {
                echo 'A';
            }
            echo '<br />';
        }
        echo '<hr />'; 

    //Task 32 
        //$a = 0;
        //$b = 2;
        //$c = 5;

    //Task 33
        $sweets = 30;
        $cookies = 50;
        
        $price_a = 0.3 * $sweets + 0.4 * $cookies;
        echo " Цена за 300г конфет и 400г печенья равна {$price_a} руб. <br />";

        $price_b = 3 * (2 * $cookies + 1.8 * $sweets);
        echo " Цена трех покупок по 2кг печенья и 1кг 800г конфет равна {$price_b} руб.";
        echo '<hr />';
        
    //Task 34 
        $direction =  11;
        $command = 1;

        if ($direction == 14 && $command == 0 || $direction == 11 && $command == -1 || $direction == 13 && $command == 1) echo 'East';
        if ($direction == 12 && $command == 0 || $direction == 11 && $command == 1 || $direction == 13 && $command == -1) echo 'West';
        if ($direction == 11 && $command == 0 || $direction == 12 && $command == -1 || $direction == 14 && $command == 1) echo 'North';
        if ($direction == 13 && $command == 0 || $direction == 12 && $command == 1 || $direction == 14 && $command == -1) echo 'South';

        echo '<hr />';

    //Task 35
        $n = 4;

        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++){
            echo '*';
            }
            echo '<br />';
        }
        echo '<hr />';

    //Task 36
        for ($i= 1001; $i <= 1025; $i= $i+3) {
            echo $i . ' ';
        }
        echo '<hr />';
        

    //Task 37 
        for ($i = 100; $i > 0; $i= $i - 4) {
            echo $i . ' ';
        }
        echo '<hr />';

    //Task 38 
        $km = 10;

        for ($i = 1; $i <= 10; $i++) {
            echo "Пробежал за {$i} день {$km} км .<br />";
            $km *= 1.1;
        }

        $day = 0;

        for ($i = 1; ; $i++) {

            if ($km <= 80) {
                $km *= 1.1;
                $day += 1;  
            } else break;

        }
        echo " На {$day}  день ему стоит прекратить увеличивать пробег";
        
    ?>
</body>
</html>