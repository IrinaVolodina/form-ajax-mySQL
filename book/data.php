<?php

require_once 'class.php';
require_once 'connection.php';

$books = array();

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    mysqli_set_charset($link, 'utf8');

