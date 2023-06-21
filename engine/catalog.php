<?php

function getCatalog()
{
    return getAssocResult("SELECT * FROM `catalog`");
}

function getOneCatalog($id)
{
    return getAssocResult("SELECT * FROM `catalog` WHERE id = {$id}");
}

//function getCatalog() {
//    return [
//        [
//            'name' => 'Пицца баварская',
//            'price' => 350,
//            'image' => 'баварская.webp'
//        ],
//        [
//            'name' => 'Пицца маргарита',
//            'price' => 450,
//            'image' => 'маргарита.webp'
//        ],
//        [
//            'name' => 'Пицца пепперони',
//            'price' => 500,
//            'image' => 'пепперони.webp'
//        ]
//    ];
//}