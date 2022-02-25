<?php
/*Функия Weekend которая  возвращает целое число.Необходимо было написать функцию которая принимает два 
параметра типа строки(две даты),и вычисляет сколько выходных дней между этими датами,если даты равны то 
вычисляется  эта дата (выходной или нет).Выходные дни-суббота и воскресенье.
The Weekend function that returns an integer. It was necessary to write a function that takes two
string type parameter (two dates), and calculates how many days off between these dates, if the dates are equal then
this date is calculated (weekend or not). Weekend days are Saturday and Sunday
*/
function Weekend(string $begin, string $end):int {

    $begin = strtotime($begin);
    $end = strtotime($end);

    $diff = floor(abs($end-$begin)/86400);   

    $num  = floor($diff/7)*2;              

    $beginNum = date("N", $begin);
    $endNum = date("N", $end);

    if ($endNum < $beginNum)
       $endNum += 7;

    $dayarr = range($beginNum, $endNum); 
    
    $num += count(array_intersect($dayarr, array(6, 7)));

    return $num;    
}
echo(Weekend('27.02.2022','27.02.2022'));
