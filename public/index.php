<?php
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die();
    echo '</pre>';
}
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/../bootstrap.php";