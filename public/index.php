<?php
include $_SERVER['DOCUMENT_ROOT'] . "/../config/index.php";

$url_array = explode("/", $_SERVER['REQUEST_URI']);

if ($url_array[1] === "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = [];
$layout = 'layout';

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        break;
    case 'catalog':
        $params['title'] = 'Каталог';
        $params['catalog'] = getCatalog();
        break;
    case 'about':
        $params['title'] = 'О нас';
        $params['phone'] = '+7(922)55-83-484';
        break;
    case 'tasks':
        $params['title'] = 'Задание 18';
        break;
    case 'gallery':
        $layout = 'gallery';
        $params['gallery'] = getGallery(IMG_BIG);
        break;
    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
    default:
        echo '404';
        die();
}

echo render($page, $params, $layout);



