<meta charset="utf-8">
<?php
session_name('book');
session_start();

$open = fopen('./kontakty.csv', "a+"); 

 while(! feof($open))
   {
    
    $allcontacts= fgetcsv($open);
    $name=$allcontacts[0];
    $secondname=$allcontacts[1];
    $phone=$allcontacts[2];
    $street=$allcontacts[3];
    $city=$allcontacts[4];
    $post=$allcontacts[5];
    echo"imie: ".$name."<br>nazwisko: ".$secondname."<br>phone: ".$phone."<br>ulica: ".$street."<br>miejscowosc: ".$city."<br>kod pocztowy: ".$post."<br><br><br>";
    
  }
  
          echo"<form method=\"post\" action=\"edit.php\" >
            
          <label for=\"\">Imie:</label></label><input type=\"text\" name=\"name\"/> <br>
          <label for=\"\">Nazwisko:</label><input type=\"text\" name=\"secondname\"/> <br>
          <label for=\"\">Nr. tel:</label><input type=\"number\" name=\"phone\"/> <br>
          <label for=\"\">Ulica:</label><input type=\"text\" name=\"street\"/> <br> 
          <label for=\"\">Miejcowość:</label><input type=\"text\" name=\"city\"/> <br>
          <label for=\"\">Kod pocztowy:</label><input type=\"text\" name=\"post\"/> <br>   <br>       
           
            <input type=\"submit\" name=\"send\"/>
        </form>";
       
        echo "  <form method=\"post\" action=\"back.php\" >
            <input type=\"submit\" name=\"send\"value=\"cofnij\"/>
        </form> ";

fclose($open);



