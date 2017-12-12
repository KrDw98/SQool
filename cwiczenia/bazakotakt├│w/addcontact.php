<meta charset="utf-8">
<?php
session_name('book');
session_start();

// $test_name =isset($_POST['name']); 
// $test_secondname =isset($_POST['secondname']); 
// $test_phone =isset($_POST['phone']); 
// $test_street =isset($_POST['street']); 
// $test_city =isset($_POST['city']); 
// $test_post =isset($_POST['post']); 

// echo $test_city;

// if ($test_name==1&&$test_secondname==1&&$test_phone==1&&$test_street==1&&$test_city==1&&$test_post==1){
// echo" ifffffff";

$open = fopen('./kontakty.csv', "a+"); 

$contact;
$contact["name"]= $_POST['name'];
$contact["secondname"]= $_POST['secondname'];
$contact["phone"]= $_POST['phone'];
$contact["street"]= $_POST['street'];
$contact["city"]= $_POST['city'];
$contact["post"]= $_POST['post'];

// \n przejscie do nowej lini pliku
$newContact  = implode (", ", $contact) . "\n";

 echo "Dodano nowy kontakt <br> ".$newContact;

fputs($open, $newContact);

fclose($open);

echo "  <form method=\"post\" action=\"back.php\" >
            <input type=\"submit\" name=\"send\"value=\"cofnij\"/>
        </form> ";



