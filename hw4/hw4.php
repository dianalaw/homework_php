<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 4</title>
</head>
<body>
    <?php
     
     //Task 1
     echo '<p><strong> Task 1 </strong></p>';

     $anyString = 'minsk';
     echo strtoupper($anyString);

     echo '<hr />';

     //Task 2  
     echo '<p><strong> Task 2 </strong></p>';

     $setDate = mktime(0, 0, 0, 12, 31, 2030);
     echo date('d-m-Y', $setDate) . '<br />';
     echo date('Y.m.d', $setDate);

     echo '<hr />';

     //Task 3 
     echo '<p><strong> Task 3 </strong></p>';

     $stringLondon = 'london is the capital of great britain';
     echo ucwords($stringLondon);

     echo '<hr />';

     //Task 4 
     echo '<p><strong> Task 4 </strong></p>';

     $st = pow(2, 10);
     echo  '2 в степени 10 равно ' . $st;

     echo '<hr />';

     //Task 5 
     echo '<p><strong> Task 5 </strong></p>';

     $string = 'abc abc abc';
     echo ' <strong><i> Первая буква \' b \' находится на позиции номер: </i></strong>' . strpos($string, 'b');

     echo '<hr />';

     //Task 6 
     echo '<p><strong> Task 6 </strong></p>';

     echo '<strong><i> Позиция первой найденной буквы \' b \' , если начать поиск не с начала строки, а с позиции 3: </i></strong>' . strpos($string, 'b', 3);

     echo '<hr />';

     //Task 7 не уверена, что правильно выполнила это задание  
     echo '<p><strong> Task 7 </strong></p>';

     $string1 = 'html css php';
     $arr_elements = explode(' ', $string1);

     echo $arr_elements[0] . '<br />';
     echo $arr_elements[1] . '<br />';
     echo $arr_elements[2];

     echo '<hr />';

     //Task 8 сомневаюсь, правильно ли его выполнила 
     echo '<p><strong> Task 8 </strong></p>';

     $string2 = '1234567890';
     $arr_split = str_split($string2, 2);
     print_r ($arr_split);

     echo '<hr />';

     //Task 9 
     echo '<p><strong> Task 9 </strong></p>';

     $string3 = 'some text';
     echo str_shuffle($string3);

     echo '<hr />';

     //Task 10 
     echo '<p><strong> Task 10 </strong></p>';

     $htmlString = 'html, <b>php</b>, js';
     echo '<strong><i> Before: </i></strong>' . $htmlString . '<br />';

     $clearString = strip_tags($htmlString);
     echo '<strong><i> After: </i></strong>' . $clearString . '<br />';

     echo '<hr />';

     //Task 11
     echo '<p><strong> Task 11 </strong></p>'; 

    /* $time = strtotime('23-09-2031 12:58:59');
     echo $time;*/

                              //2 sposob 

     echo mktime(12, 58, 59, 9, 23, 2031);

     echo '<hr />';

     //Task 12 
     echo '<p><strong> Task 12 </strong></p>'; 

     echo date('Y.m.d G:i:s');

     echo '<hr />';

     //Task 13 
     echo '<p><strong> Task 13 </strong></p>';

     $time = strtotime('1 september 2010');
     echo  date('d F Y', $time) . ' was on ' . date('l', $time);

     echo '<hr />';

     //Task 14
     echo '<p><strong> Task 14 </strong></p>';

     $month = time();
     echo 'In ' . date('F', $month) . ' there are ' . date('t', $month) . ' days';

     echo '<hr />';

     //Task 15 
     echo '<p><strong> Task 15 </strong></p>';

     echo date('Y-m-d') . '<br />';
     echo date('d.m.Y') . '<br />';
     echo date('d.m.y') . '<br />';
     echo date ('G:i:s');

     echo '<hr />';

     //Task 16 
     echo '<p><strong> Task 16 </strong></p>';

     $date = date('Y-m-d');
     echo 'Today is ' . $date . '<br />';
     echo 'In 2 days it will be ' . date('Y-m-d', strtotime('+2 day')) . '<br />';
     echo 'In 1 month and 3 days it will be ' . date('Y-m-d', strtotime('+1 month 3 day')) . '<br />';
     echo 'In 1 year it will be ' . date('Y-m-d', strtotime('+1 year')) . '<br />';
     echo '3 days ago it was ' . date('Y-m-d', strtotime('-3 day')) . '<br />';

     echo '<hr />';

     //Task 17 сомневаюсь, правильно ли выполнила 
     echo '<p><strong> Task 17 </strong></p>';

     $password = 'blabla';
     if (strlen($password) > 5 && strlen($password) < 10 ) echo 'Пароль подходит';
     else echo 'Придумайте другой пароль';

     echo '<hr />';

     //Task 18 
     echo '<p><strong> Task 18 </strong></p>';

     $string3 = '1a2b3c4b5d6e7f8g9h0';
     for ($i = 0; $i <= 9; $i++) {
        $arr[] = $i;
     }
     echo str_replace($arr, '', $string3);
     
     echo '<hr />';

     //Task 19 
     echo '<p><strong> Task 19 </strong></p>';

     $number = 245;
     echo 'Квадратный корень из ' . $number . ' равен ' . round(sqrt($number), 2);

     echo '<hr />';

     //Task 20
     echo '<p><strong> Task 20 </strong></p>';

     $arr_numbers = [4, -2, 5, 19, -130, 0, 10];
     echo 'Минимальное число равно ' . min($arr_numbers) . '<br />';
     echo 'Максимальное число равно ' . max($arr_numbers);

     echo '<hr />';

     //Task 21 
     echo '<p><strong> Task 21 </strong></p>';

     echo rand(1, 100);

     echo '<hr />';

     //Task 22
     echo '<p><strong> Task 22 </strong></p>';

     $arr_text = ['Привет, ', 'мир', '!'];
     $text = array_shift($arr_text);
     next($arr_text);
     $text .= array_shift($arr_text);
     next($arr_text);
     $text .= array_shift($arr_text);
     echo $text;

     echo '<hr />';

     //Task 23 
     echo '<p><strong> Task 23 </strong></p>';

     $arr = [1, 2, 3, 4, 5, 6];
     echo 'Сумма элементов масива равна ' . array_sum($arr);

     echo '<hr />';

     //Task 24 
     echo '<p><strong> Task 24 </strong></p>';

     $arr = ['ru' => ['голубой', 'зеленый', 'красный'], 'en' => ['blue', 'red', 'green']];
     echo $arr['ru'][0];

     echo '<hr />';

     //Task 25 
     echo '<p><strong> Task 25 </strong></p>';

     $arr = [2, 5, 3, 9];
     $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
     echo $result;

     echo '<hr />';

     //Task 26 
     echo '<p><strong> Task 26 </strong></p>';

     $arr_weekdays = [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday'];
     echo 'Today is ' . $arr_weekdays[5];

     echo '<hr />';

     //Task 27 мне кажется, что здесь немного не то сделала, что надо 
     echo '<p><strong> Task 27 </strong></p>';

     for ($i = 1; $i <= 3; $i++) {
         $arr_random[$i] = range(1, 10);
     }
     echo '<pre>';
     print_r($arr_random);
     echo '</pre>';

     echo '<hr />';

     //Task 28 тут не получается, не знаю почему 
     echo '<p><strong> Task 28 </strong></p>';

     $arr_numb = [1, 2, -1, -2, 3, -3];
     print_r ($arr_numb);

     for ($i = 0; $i < count($arr_numb); $i++) {
         $arr_new = $arr_numb[$i] * (-1);     
     }
     print_r ($arr_new);
    
    ?>
</body>
</html>