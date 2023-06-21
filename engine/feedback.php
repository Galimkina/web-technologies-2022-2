<?php

function getAllFeedback($id) {
    $sql = "SELECT * FROM feedback WHERE catalogId = {$id} ORDER BY id DESC";

    return getAssocResult($sql);
}

function addFeedback() {
    extract($_POST);
    $sql = "INSERT INTO `feedback`(`name`, `feedback`, `catalogId`) VALUES ('{$name}', '{$feedback}', '{$catalogId}')";

    executeSql($sql);
    header("Location: /feedback/?id={$catalogId}");
}

function doFeedbackAction($action) {
    if ($action === "add") {
        addFeedback();
        die();
    }
}