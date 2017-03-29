<?php

$link = mysqli_connect('127.0.0.1:8889', 'root', 'root');

if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}

$db_selected = mysqli_select_db($link, 'konetica');

if (!$db_selected) {
    die('Cannot access' . 'konetica' . ': ' . mysqli_error($link));
}



?>