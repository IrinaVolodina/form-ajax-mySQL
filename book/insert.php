<?php
require_once 'data.php';

              
$name_book = $_POST['name_book'];
$date_add = $_POST['date_add'];
$description = $_POST['description'];
$pages = $_POST['pages'];
$price = $_POST['price'];

$query ="INSERT INTO book (name_book, date_add, description, pages, price) 
VALUES ('$name_book', '$date_add', '$description', $pages, $price);";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

