<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>books</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <?php
      require_once 'select.php';
    ?>
  </head>
  <body>
      <p><a href="add_book.php">Добавить книгу</a></p>
      
      <h1>Список книг</h1>
            <table border="1">
            <tr><td>Название</td>
            <td>Дата добавления</td>
            <td>Краткое описание</td>
            <td>Количество страниц</td>
            <td>Цена</td>
            <td>Добавлена минут назад</td></tr>
            <?php
            foreach ($books as $item) {
            $item->printBook();
            $id = $item->id;
          ?>
  <td><button class="del" value="<?php echo $id?>" >Удалить</button></td></tr>
          <?php } ?>
            </table>
          
      <script>
      $(document).ready(function(){
          $('button.del').on('click', function(){
              var idValue = $(this).val();
              
              $.ajax({
            method: "POST",
            url: "delete.php",
            data: { id: idValue}
          })
            .done(function() {
            });
            document.getElementById(idValue).remove();
          })
      })
        </script>
 </body>
</html>
