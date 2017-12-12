<html>
    <body>
        <h1>NWD</h1>
<?php
/*
$data = "1998-01-14"; // dowolna data 

$dzien_tyg = date("l",strtotime($data)); 
echo $dzien_tyg; 
*/

$day= 14;
$month= 01;
$year= 1998;
$dni_tygodnia = array( 'Niedziela', 'Poniedzialek', 'Wtorek', 'Sroda', 'Czwartek', 'Piatek', 'Sobota' );

$x=($year -1)%100;
$y=($year -1)-$x;
$z=$x+$x/4;



?>
</body>
</html>