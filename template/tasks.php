<body class="tasks">
<?php

//1
echo "<p><b>1. </b>";

$i = 0;
$n = 10;

do
{
    if ($i % 2 == 1) {
        echo $i. " - нечётное число; ";
    }
    elseif ($i % 2 <> 1 and $i > 0) {
        echo $i. " - чётное число; ";
    }
    elseif ($i == 0) {
        echo $i. " - это ноль; ";
    }
    $i++;
} while ($i < $n);

//2
echo "<p><b>2. </b>";

$array = [];

$array[] = [
        'region' => '<b>Московская область: </b>',
    'city' => 'Москва, ', 'Зеленоград, ', 'Клин.', '<br>'
];
$array[] = [
        'region' => '<b>Ленинградская область: </b>',
    'city' => 'Санкт-Петербург, ',  'Всеволожск, ', 'Павловск, ', 'Кронштадт.', '<br>'
];
$array[] = [
        'region' => '<b>Рязанская область: </b>',
    'city' => 'Рязань, ', 'Скопин, ', 'Ряжск.'
];

foreach ($array as $key => $city) {
    if (is_array($city)) {
        foreach ($city as $inner_key => $inner_city) {
            echo $inner_city;
        }
    }
}

//3
echo "<p><b>3. </b>";

$array = [
    'a' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'x',
    'ц' => 'cz',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shh',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya'
];

$text = 'добро пожаловать!';

$new_text = strtr(mb_strtolower($text), $array);
echo "$new_text<br>";

//4
echo "<p><b>4. </b>";

$menu = [
    'Главная',
    'Каталог' => [
        'Пицца',
        'Комбо',
        'Закуски',
        'Десерты',
        'Напитки'
    ],
    'О нас'
];

echo '<ul>';
foreach ($menu as $key => $value) {
    if (is_array($value)) {
        echo '<li>' . $key . '<ul>';
        foreach ($value as $new_value) {
            echo '<li>' . $new_value . '</li>';
        }
        echo '</ul>' . '</li>';
    }
    else {
        echo '<li>' . $value . '</li>';
    }
}
echo '</ul>';

//6
echo "<p><b>6. </b>";

$array = [];

$array[] = [
    'region' => '<b>Московская область: </b>',
    'city' => 'Москва, ', 'Зеленоград, ', 'Клин, ', '<br>'
];
$array[] = [
    'region' => '<b>Ленинградская область: </b>',
    'city' => 'Санкт-Петербург, ',  'Всеволожск, ', 'Павловск, ', 'Кронштадт.', '<br>'
];
$array[] = [
    'region' => '<b>Рязанская область: </b>',
    'city' => 'Рязань, ', 'Скопин, ', 'Ряжск.'
];

foreach ($array as $key => $city) {
    if (is_array($city)) {
        foreach ($city as $inner_key => $inner_city) {
            if (mb_substr($inner_city, 0,1) == 'К') {
                echo $inner_city;
            }
        }
    }
}
echo '<br>';
