<?php
 $submit=$_POST["submit"];
 $first=$_POST["first"];
 $second=$_POST["second"];
 
class Calculator{
    
    
    
    
    function Dodawanie($a,$b){
        $wynik= $a + $b;
        return $wynik."<br>";
        echo $submit;
    }
    function Odejmowanie($a,$b){
        $wynik= $a - $b;
        return $wynik."<br>";
    }
    function Mnozenie($a,$b){
        $wynik= $a * $b;
        return $wynik."<br>";
    }
    function Dzielenie($a,$b){
        $wynik= $a / $b;
        return $wynik."<br>";
    }
    function Potegowanie($a,$b){
        $wynik= pow($a,$b);
        return $wynik."<br>";
    }
    function Pierwiastkowanie($a,$b){
        $wynik= pow($a,1/$b);
        return $wynik."<br>";
    }
    function ResztaDzielenia($a,$b){
        $wynik= $a % $b;
        return $wynik."<br>";
    }
    function DzielenieCalkowite($a,$b){
        $wynik== ~~($a/$b);
        return $wynik."<br>";
    }
}

$calc = new Calculator;

if($submit==="dodaj"){
    echo $calc ->Dodawanie($first,$second);
}
elseif($submit==="odejmij"){
    echo $calc ->Odejmowanie($first,$second);
}
elseif($submit==="pomnoz"){
    echo $calc ->Mnozenie($first,$second);
}
elseif($submit==="podziel"){
    echo $calc ->Dzielenie($first,$second);
}
elseif($submit==="poteguj"){
    echo $calc ->Potegowanie($first,$second);
}
elseif($submit==="pierwiastkuj"){
    echo $calc ->Pierwiastkowanie($first,$second);
}
elseif($submit==="reszta z dzielenia"){
    echo $calc ->ResztaDzielenia($first,$second);
}
elseif($submit==="dzielenie calkowite"){
    echo $calc ->DzielenieCalkowite($first,$second);
}





 echo "  <form method=\"post\" action=\"back.php\" >
            <input type=\"submit\" name=\"send\"value=\"wykonaj kolejne dzialanie\"/>
        </form> ";