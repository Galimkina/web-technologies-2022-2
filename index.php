<?php
$content = file_get_contents("./index.html");
$year = date('Y '). 'год.';

$title = str_replace('{{title}}', 'Время', $content);
$h1 = str_replace('{{h1}}', 'Текущее Московское время', $title);
$thisYear = str_replace('{{year}}', $year, $h1);
echo $thisYear;

$hour = date('H ');
$minute = date(' i');

function func($hour)
{
    if ($hour == 1 or $hour == 21) {
        return "$hour час";
    } else if ($hour == 0 or $hour >= 5 and $hour <= 20)  {
        return "$hour часов";
    } else
        return "$hour часа";
}
echo func($hour);

function func1($minute)
{
    if ($minute == 1 or $minute == 21 or $minute == 31 or $minute == 41 or $minute == 51) {
        return "$minute минута";
    } else if ($minute == 0 or $minute >= 5 and $minute <=20 or $minute >= 25 and $minute <= 30 or $minute >= 35 and $minute <= 40 or $minute >= 45 and $minute <= 50 or $minute >= 55) {
        return "$minute минут";
    } else
        return "$minute минуты";
}
echo func1($minute);