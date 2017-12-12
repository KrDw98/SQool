<html>
    <head>
 <link rel="stylesheet" type="text/css" href="./style2.css">
    </head>
    
    <body>
        <div class="calculator">
            
              <form action="" method="POST">
            <label>Pierwsza liczba</label><br>
            <input type="number" name="first"/><br>
            <label>Druga liczba</label><br>
            <input type="number" name="second"/><br>
            <input type="submit" name="submit" value="dodaj"/>
            <input type="submit" name="submit" value="odejmij"/>
            <input type="submit" name="submit" value="pomnoz"/>
            <input type="submit" name="submit" value="podziel"/>
            <input type="submit" name="submit" value="poteguj"/>
            <input type="submit" name="submit" value="pierwiastkuj"/>
            <input type="submit" name="submit" value="reszta z dzielenia"/>
            <input type="submit" name="submit" value="dzielenie calkowite"/>
        </form> 
        
        </div>
    </body>
</html>

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
    echo "<div class=\"wynik\">";
    echo $calc ->Dodawanie($first,$second);
    echo "</div>";
}
elseif($submit==="odejmij"){
    echo "<div class=\"wynik\">";
    echo $calc ->Odejmowanie($first,$second);
    echo "</div>";
}
elseif($submit==="pomnoz"){
    echo "<div class=\"wynik\">";
    echo $calc ->Mnozenie($first,$second);
    echo "</div>";
}
elseif($submit==="podziel"){
    echo "<div class=\"wynik\">";
    echo $calc ->Dzielenie($first,$second);
    echo "</div>";
}
elseif($submit==="poteguj"){
    echo "<div class=\"wynik\">";
    echo $calc ->Potegowanie($first,$second);
    echo "</div>";
}
elseif($submit==="pierwiastkuj"){
    echo "<div class=\"wynik\">";
    echo $calc ->Pierwiastkowanie($first,$second);
    echo "</div>";
}
elseif($submit==="reszta z dzielenia"){
    echo "<div class=\"wynik\">";
    echo $calc ->ResztaDzielenia($first,$second);
    echo "</div>";
}
elseif($submit==="dzielenie calkowite"){
    echo "<div class=\"wynik\">";
    echo $calc ->DzielenieCalkowite($first,$second);
    echo "</div>";
}


?>