<?php


$counter = $_SESSION['counter'] ?? 0;
$counter = $counter + 1;
$_SESSION['counter'] = $counter;

$message = 'Page view: ' . $counter;

if(!$_SESSION['auth']){
    header('location: /');
}










