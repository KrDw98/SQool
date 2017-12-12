<html>
    <body>
        <h1>DELTA</h1>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console


$a = 1;
$b = 1;
$c = 1;
//b do kwadratu minus 4ac
echo "Wzor na delte";
echo "b*b-4*a*c<br><br>";
$delta = $b*$b-4*$a*$c;
echo "$b*$b-4*$a*$c=$delta<br><br>";


$delta_sqrt = sqrt($delta);
$x;
$x1;
$x2;

if ($delta > 0){
    echo"------------------------------------------------------------<br>";
    echo "delta jest wieksza niz 0 wiec ma dwa rozwiazania<br>";
    
    echo "wzor na x1<br>(-b+pierwiastek z delty)/2*a<br>";
    $x1 = (-$b+$delta_sqrt)/2*$a;
    echo "<br>".$x1."<br><br>";
    
    echo "wzor na x2<br>(-b-pierwiastek z delty)/2*a<br>";
    $x2 = (-$b-$delta_sqrt)/2*$a;
    echo "<br>".$x2."<br>";
    echo"------------------------------------------------------------<br>";
}
elseif($delta==0){
    echo"------------------------------------------------------------<br>";
    echo"delta jest rowna 0 wiec ma jedno rozwiazanie<br>";
    echo "wzor na x -b/2*a<br>";
    echo"------------------------------------------------------------<br>";;
    $x = -$b/2*$a;
    echo $x;
    echo"------------------------------------------------------------<br>";
}
elseif($delta<0){
    echo"------------------------------------------------------------<br>";
    echo"delta mniejsza niz 0 brak rozwiazan<br>";
    echo"------------------------------------------------------------<br>";
}
else{
    echo"------------------------------------------------------------<br>";
    echo"blad";
    echo"------------------------------------------------------------<br>";
}


?>
</body>
</html>