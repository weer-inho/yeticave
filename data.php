<?php

$categories = [
    "boards" => "Доски и лыжи",
    "attachment" => "Крепления",
    "boots" => "Ботинки",
    "clothing" => "Одежда",
    "tools" => "Инструменты",
    "other" => "Разное"
];

$goods = [
    [
        "title" => "Название Категория Цена URL картинки 2014 Rossignol District Snowboard",
        "category" => $categories["boards"],
        "price" => 10999,
        "url" => "img/lot-1.jpg",
    ],
    [
        "title" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => $categories["boards"],
        "price" => 159999,
        "url" => "img/lot-2.jpg",
    ],
    [
        "title" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => $categories["attachment"],
        "price" => 8000,
        "url" => "img/lot-3.jpg",
    ],
    [
        "title" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => $categories["boots"],
        "price" => 10999,
        "url" => "img/lot-4.jpg",
    ],
    [
        "title" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => $categories["clothing"],
        "price" => 7500,
        "url" => "img/lot-5.jpg",
    ],
    [
        "title" => "Маска Oakley Canopy",
        "category" => $categories["other"],
        "price" => 5400,
        "url" => "img/lot-6.jpg",
    ],
];

$is_auth = rand(0, 1);

$user_name = 'Руслан';
