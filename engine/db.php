<?php

function getDb() {
    static $db = null;
    if (is_null($db)) {
        $db = mysqli_connect(
            "localhost",
            "root",
            "",
            "lessons20") or dir("Ошибка подключения" . mysqli_connect_error());
    }
    return $db;
}

function getAssocResult($sql) {
    $result = mysqli_query(getDb(), $sql) or die(mysqli_error(getDb()));

    $array_result = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $array_result[] = $row;
    }

    return $array_result;
}

function getDatabase() {
    return getAssocResult("SELECT * FROM `catalog`");
}
