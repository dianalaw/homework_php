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
        //$a = null;
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
        $a = null;

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
        $Num4 = 34;

        if ( $Num1 > 5 && $Num2 > 5 && $Num3 / 6 && ($Num4 % 3 != 0) ) {
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

    //Task 19 неправильно выводит результат 
        $year = 1700;

        if ($year / 4 && ($year % 100 != 0) or $year / 400) {
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

    //Task 22 don't know 

    //Task 23 не знаю, как вывести сумму 

        for ($i=20; $i <= 45; $i++) {
            if ($i % 5) continue;
            echo $i . ' ';
        }
        echo '<hr />';
    
    //Task 24 don't know 

    //Task 25 
        for ($i=1; $i<=100; $i++) {
            echo $i . '<br />';
        }
        echo '<hr />';

    //Task 26 не понимаю, как обратиться к цифрам именно на четных позициях, мое решение скорее всего неправильное
        $numbr = '12345';
        $numbr[1] = 0;
        $numbr[3] = 0;
        echo $numbr;
        echo '<hr />';

    //Task 27 
    for ($i=11; $i<=33; $i++) {
        echo $i . '<br />';
    }
    echo '<hr />';
    
    //Task 28 don't know
        $number3 = 123;

    //Task 29 пробовала, но тут немного бред выходит 
       /* $i = 1000;
        for (; ;$i++) {
            $num = $i / 2;
            if ($num >= 50) echo $num . ' ';
            else break;
        } */ 

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
        
    ?>
</body>
</html>