<?php

class book {
    public $id;
    public $name_book;
    public $date_add;
    public $description;
    public $pages;
    public $price;
    
    function __construct($row) {
        $this->id = $row['id'];
        $this->name_book = $row['name_book'];
        $this->date_add = $row['date_add'];
        $this->description = $row['description'];
        $this->pages = $row['pages'];
        $this->price = $row['price'];  
    }
    
    public function printBook() {
        date_default_timezone_set("Europe/Moscow");
        $date1 = strtotime($this->date_add);
        $date2 = strtotime(date("Y-m-d H:i:s"));
        $diff = ABS($date1 - $date2);
        
        
        echo '<tr id='.$this->id.'><td>'.$this->name_book.'</td>'
                . '<td>'.$this->date_add.'</td>'
                . '<td>'.$this->description.'</td>'
                . '<td>'.$this->pages.'</td>'
                . '<td>'.$this->price.'</td>'
                . '<td>'.intdiv($diff, 60).'</td>';
    }
}
