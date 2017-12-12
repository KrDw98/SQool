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


fclose($open);



echo "  <form method=\"post\" action=\"back.php\" >
            <input type=\"submit\" name=\"send\" value=\"cofnij\"/>
        </form> ";



//$aArray[1] = '3434'; // zamiana drugiego elementu tablicy z 4343 na 3434