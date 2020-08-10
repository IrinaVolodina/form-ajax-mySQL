<?php
require_once 'data.php';
$id = $_POST['id'];
 $query ="DELETE FROM book WHERE id = $id";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

