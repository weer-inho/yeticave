<?php
require_once("helpers.php");
require_once("data.php");
require_once("functions.php");

$page_content = include_template("main.php", [
    "categories" => $categories,
    "goods" => $goods
]);

$layout_content = include_template("layout.php", [
    "content" => $page_content,
    "categories" => $categories,
    "title" => "Главная",
    "user_name" => $user_name,
    "is_auth" => $is_auth,
]);

print($layout_content);
