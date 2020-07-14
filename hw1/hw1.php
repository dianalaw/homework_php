<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        // Task 1
        $hours = 24;
        $min = 60;
        $sec = 60;
        echo '<p> В сутках ' . $hours * $min * $sec . ' секунд. </p>';
        echo '<hr />';

        // Task 2
        $a = 3;
        echo $a;
        echo '<hr />';

        // Task 3
        $a = 10;
        $b = 2;
        echo $a + $b;
        echo '<br />';
        echo $a - $b;
        echo '<br />';
        echo $a * $b;
        echo '<br />';
        echo $a / $b;
        echo '<hr />';

        // Task 4
        $c = 15;
        $d = 2;
        $result = $c + $d;
        echo $result;
        echo '<hr />';

        // Task 5
        $x = 2;
        $y = 6;
        $z = 9;
        $i = (($x + 1) * 4 - 2 * ($z - 2* $x ** 2 + $y ** 2));
        echo $i;
        echo '<hr />';

        // Task 6 
        $a = 4;
        $b = 8;
        $c = 3;
        echo ($a + $b) / $c;
        echo '<br />';
        echo ($a + $c) / $b;
        echo '<br />';
        echo ($b + $c) / $a;
        echo '<hr />';

        // Task 7
        $firstnumber = 17;
        $secondnumber = 54;
        echo (0.4 * $firstnumber) + (0.84 * $secondnumber);
        echo '<hr />';

        // Task 8
        $a = 10;
        $b = 2;
        $c = 5;
        echo $a + $b + $c;
        echo '<hr />';

        // Task 9 
        $a = 17;
        $b = 10;
        $d = 7;
        $result = ($c = $a - $b) + $d;
        echo $result;
        echo '<hr />';

        // Task 10
        $text = 'Привет, Мир!';
        echo $text;
        echo '<hr />';

        // Task 11
        $text1 = 'Привет,';
        $text2 = ' Мир!';
        $sum = $text1.$text2;
        echo $sum;
        echo '<hr />';

        // Task 12
        $name = 'Диана';
        echo '<p> Привет, ' .$name . ' !</p>';
        echo '<hr />';

        // Task 13 
        $age = 20;
        echo '<p> Мне ' . $age .  ' лет! </p>';
        echo '<hr />';

        // Task 14
        $text = 'abcde';
        echo $text[0] . '<br />' . $text[2] . '<br />' . $text[4];
        echo '<hr />';

        // Task 15
        $string = 'abcde';
        $string[0] = '!';
        echo $string;
        echo '<hr />';

        // Task 16 
        $num = '12345';
        $sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
        echo $sum;
        echo '<hr />';

        // Task 17
        $sec = 60;
        $min = 60;
        $hours = 24;
        $DaysPerMonth = 30;
        $DaysPerYear = 365;
        $years = 20;

        $SecPerHour = $sec * $min;
        echo '<p> В часе ' . $SecPerHour .  ' секунд. </p>';
        echo '<br />';

        $SecPerDay = $SecPerHour * $hours;
        echo '<p> В сутках ' .  $SecPerDay .  ' секунд. </p>';
        echo '<br />';

        $SecPerMonth = $SecPerDay * $DaysPerMonth;
        echo '<p> В месяце ' .  $SecPerMonth.  ' секунд. </p>';
        echo '<br />';

        $SecPerYear = $SecPerDay * $DaysPerYear;
        echo '<p> В году ' .  $SecPerYear.  ' секунд. </p>';
        echo '<br />';

        $SecSince2000 = $SecPerYear * $years;
        echo '<p> С 2000 года прошло примерно ' .  $SecSince2000.  ' секунд. </p>';
        echo '<hr />';

        // Task 18
       $hour = 8;
       $minute = 53;
       $secund = 45;
       echo "<p> {$hour}ч <strong>:</strong> {$minute}мин <strong> : </strong> {$secund}с </p>";
       echo '<hr />';

       // Task 19
        $square = 9;
        echo $square**2;
        echo '<hr />';

        // Task 20 
        $var = 1;
        $var +=12;
        $var -=14;
        $var *=5;
        $var /=7;
        ++$var;
        $var--;
        echo $var;
        echo '<hr />';

        // Task 21 
        define ('SURNAME', 'Голубицкая');
        $const = 'SURNAME';
        $name = 'Диана';
        $fathername = 'Владимировна';
        $age = 20;
        var_dump (defined('SURNAME'));
        echo '<br />';
        echo  ('<p> "Меня зовут '. SURNAME.' ('.$name[0].'. '.$fathername[0].'.). <br /> Мне '.$age.' лет."</p>');
        echo '<hr />';

        // Task 22
        $text = 'Я';
        $text .= 'хочу';
        $text .= 'знать';
        $text .= 'PHP!';
        echo $text;
        echo '<hr />';

        // Task 23 
        $var = 10;
        ++$var;
        ++$var;
        --$var;
        echo $var;
        
    ?>
    
</body>
</html>