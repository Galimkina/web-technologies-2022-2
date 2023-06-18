<?php

// 1
echo "<b>1. </b>";
$a = 9;
$b = 5;

function func($a, $b) {
    if ($a >= 0 and $b >= 0) {
        return $a - $b;
    } else if ($a < 0 and $b < 0) {
        return $a * $b;
    } else {
        return $a + $b;
    }
}
echo func($a, $b);

// 2
echo "<b><p>2. </b>";
$a = 11;

switch ($a) {
    case ($a <= 15):
        for ($i = $a; $i <= 15; $i++) {
            echo ($i) . ' ';
        }
}

// 3
echo "<b><p>3. </b>";
$a = 4;
$b = 2;

function sum($a, $b) {
    return $a + $b;
}

function dif($a, $b) {
    return $a - $b;
}

function mul($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return $a / $b;
}
echo 'сумма: '.sum($a,$b).'; разность: '.dif($a,$b).'; умножение: '.mul($a,$b).'; деление: '.div($a,$b);

// 4
echo "<b><p>4. </b>";

$a = 5;
$b = 4;

function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case 'sum':
            return sum($a, $b);
        case 'dif':
            return dif($a, $b);
        case 'mul':
            return mul($a, $b);
        case 'div':
            return div($a, $b);
    }
}
echo 'сумма: '. mathOperation($a,$b,'sum').'; разность: '.mathOperation($a,$b,'dif').'; умножение: '.mathOperation($a,$b, 'mul').'; деление: '.mathOperation($a,$b, 'div');

//5
echo "<b><p>5. </b>";
//1 способ
$content = file_get_contents("./index.html");
$year = date('Y '). 'год.';
$thisYear = str_replace('{{year}}', $year, $content);
echo $thisYear;

//2 способ
echo $year;
?>

    <!--3 способ-->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <p><?php echo $year?></p>
    </body>
    </html>

<?php

echo "<b><p>6. </b>";

$val = 2;
$pow = 5;

function power($val, $pow) {
    if ($pow > 0) {
        return $val * power($val, $pow - 1);
    }
    else if ($pow < 0) {
        return  1 / $val * power($val, $pow + 1);
    }
    else if ($pow == 0) {
        return 1;
    }
    else if ($val == 0) {
        return 0;
    }
}
echo power($val, $pow);
