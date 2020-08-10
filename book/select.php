<?php
require_once 'data.php';
 $query ="SELECT * FROM book";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$count = mysqli_num_rows($result);

if($count){
    while ($row = mysqli_fetch_array($result)) {
        $books[] = new book($row);
    }
}
