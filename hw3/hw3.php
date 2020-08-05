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
                echo 'Куб числа ' . $num . ' равен ' . $result;
            }
            cube(3);
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

            $number = -5;

            function check($number) {

                if ($number > 0 ) {
                    return true;
                }
                else {
                    return false;
                } 
            }

            if (check($number)) {
                echo $number . ' является положительным числом';
            } else {
                echo $number . ' является отрицательным числом';
            }

            echo '<hr / >';

        //Task 5
            echo '<p><strong> Task 5 </strong><br /></p>';

            function getDigitsSum($digit) {
                $summ = 0;
                $string = (string) $digit;

               for ($i = 0; ; $i++){
                   if (empty($string[$i])) break;
                    $summ += (int)$string[$i];
               }
               return $summ;
            }
            echo getDigitsSum(12);
            
            echo '<hr / >';

        //Task 6 
           echo '<p><strong> Task 6 </strong><br /></p>';

            function years() {
                for ($i = 1; $i <= 2020; $i++) {
                    if (getDigitsSum($i) == 13) echo $i . '<br />';
                }
            }
            years();

            echo '<hr / >';

        //Task 7 
            echo '<p><strong> Task 7 </strong><br /></p>';

            $numb = 6;
            function isEven($numb) {
                if ($numb % 2 == 0) return true;
                else return false;
            }
            
            if (isEven($numb)) {
                echo $numb  . ' является четным числом';
            } else {
                echo $numb . 'является нечетным числом';
            }

            echo '<hr / >';

        //Task 8 
            echo '<p><strong> Task 8 </strong><br /></p>';

            /*function translit($string) {
                $arr_ru = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];

                $arr_lat = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'];

                return str_replace($arr_ru, $arr_lat, $string);
              }
              echo translit("Какой-то текст");

            echo '<hr / >'; */

                                                                //2 variant

            function translit($s) {
            
            $arr_ru = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];

            $arr_lat = ['A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'];

            if (!is_string($s)) return 'Enter the string';

            for ($i = 0; $i < strlen($s); $i++) {

                $string = mb_substr ($s, $i, 1);
                for ($k = 0; $k < count($arr_ru); $k++) {
                    if ($string == $arr_ru[$k]) echo $arr_lat[$k];
                }
            }
        }

            echo translit("Какой-то текст");
            echo '<hr / >'; 

        //Task 9 

            echo '<p><strong> Task 9 </strong><br /></p>';
            
            function sing_and_plural($number = 0, $singular, $two_three_four, $plural) {
                $string = (string) $number;
                $strlen = strlen($string) - 1; 
                if ($number == 0) return $number . ' ' . $plural;
                elseif ($number == 1) return $number . ' ' . $singular;
                elseif ($number >= 2 && $number <= 4) return $number . ' ' .  $two_three_four;
                elseif ($number >= 5 && $number <= 20) return $number . ' ' . $plural;
                elseif ($string[$strlen] == 1) return $number . ' ' . $singular;
                elseif ($string[$strlen] >= 2 && $string[$strlen] <= 4) return $number . ' ' . $two_three_four;
                elseif ($string[$strlen] >= 5) return $number . ' ' . $plural;
            }
            echo sing_and_plural(68, 'яблоко', 'яблока', 'яблок');

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

        //Task 11 
            echo '<p><strong> Task 11 </strong><br /></p>';

            function summary($number){
                $number = (string) $number;
                $sum = 0;
                
                for ($i = 0; $i < strlen($number); $i++) {
                    $sum += (int) $number[$i];
                }

                $sum1 = $sum;
                echo $sum1 . '<br />';

               if ($sum1 > 9) summary($sum1);
            }

            summary(456);

           /* function summa($digit) {
                $sum = getDigitsSum($digit);

                if ($sum > 9) {
                   return summa($sum);
                }

                return $sum;
            }

            echo summa(456);*/
            echo '<hr / >';

                
        //Task 12
            echo '<p><strong> Task 12 </strong><br /></p>';

            function count_speed ($length, $time) {
                $speed = $length / $time;
                echo " Скорость равна {$speed} км/ч или ";
                $metres_per_second = $speed / 3.6;
                echo round (" {$metres_per_second}", 2) . ' м/c';
            }
            count_speed (40, 5);

            echo '<hr / >';

    ?>

</body>
</html>