<?php
define('ROOT', dirname(__DIR__));
define('IMG_BIG', $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/big/");
define('IMG_SMALL', $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/small/");
const TEMPLATE_DIR = ROOT . '/template/';
const LAYOUTS_DIR = 'layouts/';

include ROOT . "/engine/functions.php";
include ROOT . "/engine/gallery.php";
include ROOT . "/engine/catalog.php";