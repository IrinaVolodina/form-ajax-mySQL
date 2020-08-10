<?php
require_once 'data.php';
date_default_timezone_set("Europe/Moscow");
$date1 = date("Y-m-d H:i:s");
?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  
<p><a href="index.php">Список книг</a></p>
<h1>Добавить книгу</h1>
<form>
    <p>Название</p>
    <p><input type="text" class="name_book" id="name_book"></p>  
    <p>Дата добавления </p>
    <p><input type="datetime" class="date_add" id="date_add" value="<?php echo $date1;?>"></p>
    <p>Краткое описание</p>
    <p><textarea class="description" id="description" cols="23" rows="10"></textarea></p>
    <p>Количество страниц</p>
    <p><input type="text" class="pages" id="pages"></p>
    <p>Цена</p>
    <p><input type="text" class="price" id="price"></p>
    <p><button class="insert">Добавить</button></p>
</form>

 <script>
      $(document).ready(function(){
          $('button.insert').on('click', function(){
              var name_bookValue = $('input.name_book').val();
              var date_addValue = $('input.date_add').val();
              var descriptionValue = $('textarea.description').val();
              var pagesValue = $('input.pages').val();
              var priceValue = $('input.price').val();
              
              event.preventDefault();
              
              if(!name_bookValue){
                  document.getElementById('name_book').style.border = "2px solid red";
              }
              if(!date_addValue){
                  document.getElementById('date_add').style.border = "2px solid red";
              }
              if(!descriptionValue){
                  document.getElementById('description').style.border = "2px solid red";
              }
              if(!pagesValue){
                  document.getElementById('pages').style.border = "2px solid red";
              }
              if(!priceValue){
                  document.getElementById('price').style.border = "2px solid red";
              }
              
              if(name_bookValue && date_addValue && descriptionValue && pagesValue && priceValue){
            $.ajax({
            method: "POST",
            url: "insert.php",
            data: { name_book: name_bookValue, date_add: date_addValue, description: descriptionValue, pages: pagesValue, price: priceValue}
          })
            .done(function() {
            document.location.href = 'index.php';    
            });
            }  
          })
      })
        </script>