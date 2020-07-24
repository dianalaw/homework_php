<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 3</title>
</head>
<body>
    <?php 

        //Task 1 
            echo '<p><strong> Task 1 </strong><br /></p>'; 

            function cube($num) {
                $result = $num ** 3;
                return $result;
            }
            echo '<p> Куб числа равен  ' . cube(3) . ' </p>';

            echo '<hr / >';

        //Task 2
            echo '<p><strong> Task 2 </strong><br /></p>';

            function summ($a, $b) {
                return $a + $b;
            }
            echo '<p>  Сумма чисел равна ' . summ (5, 3) . ' </p>';

            echo '<hr / >';

        //Task 3 
            echo '<p><strong> Task 3 </strong><br /></p>';

            function week_day($day) {

                switch ($day) {
                    case 1:
                        echo 'Пн';
                    break;

                    case 2:
                        echo 'Вт';
                    break;

                    case 3:
                        echo 'Ср';
                    break;

                    case 4:
                        echo 'Чт';
                    break;

                    case 5:
                        echo 'Пт';
                    break;

                    case 6:
                        echo 'Сб';
                    break;

                    case 7:
                        echo 'Вс';
                    break;
                }

            }
            echo week_day (3);

            echo '<hr / >';

        //Task 4 
            echo '<p><strong> Task 4 </strong><br /></p>';

            function check($number) {
                if ($number > 0 ) echo 'true';
                else echo 'false';
            }
            check(-5);

            echo '<hr / >';

        //Task 5 не получается 
            echo '<p><strong> Task 5 </strong><br /></p>';

            /*function getDigitsSum($digit) {
                $summ = 0;
                $string = (string) $digit;

               for ($i = 0; $i < $string; $i++){
                    $summ += $string[$i];
               }
               return $summ;
            }
            getDigitsSum(12); */

        //Task 6 для того, чтобы его выполнить нужно сразу сделать номер 5 
            echo '<p><strong> Task 6 </strong><br /></p>';

        //Task 7 
            echo '<p><strong> Task 7 </strong><br /></p>';

            function isEven($numb) {
                if ($numb % 2 == 0) echo 'true';
                else echo 'false';
            }
            isEven(6);

            echo '<hr / >';

        //Task 8 честно говоря, посдмотрела решение в интернете, не знала про функцию str_replace, изначально пробовала решить это задание через switch, но не получилось
            echo '<p><strong> Task 8 </strong><br /></p>';

            function translit($string) {
                $arr_ru = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];

                $arr_lat = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'];

                return str_replace($arr_ru, $arr_lat, $string);
              }
              echo translit("Какой-то текст");

            echo '<hr / >'; 

        /*Task 9 не знаю, как сделать так, чтобы выделялась последняя цифра ЛЮБОГО числа и проверялась через if, из-за этого, если в мое решение подставить, например, 64, то покажет 64 ЯБЛОК, а правильно 64 ЯБЛОКА, при этом нужно исключить числа от 12 до 14, т.к. здесь уже должна быть форма ЯБЛОК*/
            echo '<p><strong> Task 9 </strong><br /></p>';
            
            function sing_and_plural($number, $singular = 'яблоко', $two_three_four = 'яблока', $plural = 'яблок') {
                if ($number == 1) return $number . ' ' . $singular;
                elseif ($number >= 2 && $number <= 4) return $number . ' ' .  $two_three_four;
                else return $number . ' ' . $plural;
            }
            echo sing_and_plural(13);

            echo '<hr / >';

        //Task 10 
            echo '<p><strong> Task 10 </strong><br /></p>';

            function echo_arr($arr_numbers, $i = 0) {

                if (!empty($arr_numbers[$i])) {
                    echo $arr_numbers[$i] . ' <br /> ';
                    $i++;
                    echo_arr($arr_numbers, $i);
                }

            }
            echo_arr ([12, 34.5, 81, 63, 220, 1083, 15.16]);

            echo '<hr / >';

        //Task 11 тут не получается :((
            echo '<p><strong> Task 11 </strong><br /></p>';

            /*function summary($number) {

                $sum = 0;

                for ($i = 0; ; $i++) {
                    $sum += $number[$i];
                }

                if ($sum > 9) {
                   summary($number);
                } else {
                    return $sum;
                }
            }
            summary(123); */

        //Task 12
            echo '<p><strong> Task 12 </strong><br /></p>';

            function count_speed ($length, $time) {
                $speed = $length / $time;
                echo " Скорость равна {$speed} км/ч или ";
                $metres_per_second = $speed / 3.6;
                echo " {$metres_per_second} м/с ";
            }
            count_speed (40, 5);

            echo '<hr / >';

    ?>
</body>
</html>