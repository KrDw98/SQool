 <link rel="stylesheet" type="text/css" href="style.css">
<?php

$test_from =isset($_POST['from']); 
$test_to =isset($_POST['to']); 
$test_title =isset($_POST['title']); 
$test_content =isset($_POST['content']); 
 



if($test_from==1&&$test_to==1&&$test_title==1&&$test_content==1){
echo "<div class=\"mail\">";
    
echo "<div class=\"from\">";
echo "Od: ";
$od = $_POST['from'];
echo $od."<br>";
echo "</div>";


echo "<div class=\"too\">";
echo "Do: ";
$do = $_POST['to'];
echo $do."<br>";
echo "</div>";

echo "<div class=\"title\">";
echo "Tytul: ";
$tytul = $_POST['title'];
echo $tytul."<br>";
echo "</div>";

echo "<div class=\"cat\">";
echo "Kategoria: ";
$kat = $_POST['category'];
echo $kat."<br>";
echo "</div>";

echo "<div class=\"cont\">";
echo "Tresc: ";
$tresc = $_POST['content'];
echo $tresc."<br>";
echo "</div>";

echo "</div>";
}
