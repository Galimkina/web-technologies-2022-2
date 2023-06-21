<?php

function prepareVariables($page, $action)
{
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
        case 'db':
            $layout = 'db';
            $params['db'] = getDatabase();
            break;
        case 'feedback':
            doFeedbackAction($action);
            $id = (int)$_GET['id'];
            $params['title'] = 'Отзывы';
            $params['feedback'] = getAllFeedback($id);
            $params['catalog'] = getOneCatalog($id);
            break;
        case 'apicatalog':
            echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
            die();
        default:
            echo '404';
            die();
    }
    return [
        'params' => $params,
        'layout' => $layout,
    ];
}