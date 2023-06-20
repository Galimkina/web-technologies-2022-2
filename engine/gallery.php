<?php
function getGallery($path) {
    return array_splice(scandir($path), 2);
}

//4
$day = date('G:i:s d:m:Y');
function logging($day) {
    file_put_contents("log.txt", $day . PHP_EOL, FILE_APPEND);
}
logging($day);

//3
if (!empty($_FILES)) {
    $path = "gallery_img/small/" . $_FILES["myFile"]["name"];
    if ($_FILES["myFile"]["size"] > 5 * 1024 * 1024) {
        echo $message = 'Размер файла не должен превышать 5 мб!';
    } else if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $path)) {
        echo $message = 'Файл успешно загружен!';
        imagejpeg(imagecreatefromjpeg($path), "gallery_img/big/" . $_FILES["myFile"]["name"]);
    } else {
        echo $message = 'Ошибка загрузки!';
    }
}