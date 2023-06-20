<?php

//1 and 2
define('DIR_IMG', './gallery_img', false);

function renderTemplate($page, $arrImg = [], $arrHtml = []) {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

function renderArr() {
    $arr = [];
    $scanDir = scandir(DIR_IMG);
    for ($i = 0; $i < count($scanDir); $i++) {
        if (strlen($scanDir[$i]) > 2) {
            $scanDirImg = scanDir(DIR_IMG . "/" . $scanDir[$i]);
            for ($j = 0; $j < count($scanDirImg); $j++) {
                if (strlen($scanDirImg[$j]) > 2) {
                    $arr[$i - 2][$j - 2] = DIR_IMG . "/" . $scanDir[$i] . "/" . $scanDirImg[$j];
                }
            }
        }
    }
    return $arr;
}

$arrImg = renderArr();

$gallery = renderTemplate('gallery', $arrImg);

$arrHtml = array($gallery);

echo renderTemplate('main', $arrImg, $arrHtml);
