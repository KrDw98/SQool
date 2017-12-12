<html>
    <body>
        <h1></h1>
<?php

     $tab = array( 12,5,56,78,123,7,213,56,4,676 );
     $size=sizeof($tab);

    for($x=0;$x<$size;$x++){
        $suma+=$tab[$x];
    }
    echo "suma to".$suma."<br>";
   
   //min
   $min=$tab[0];
   for($x=0;$x<$size;$x++){
        if($min>$tab[$x]){
            $min=$tab[$x];
        }
    }
    echo 'wartosc najmniejsza to '.$min.'<br>';
    
    //max
    $max=$tab[9];
       for($x=0;$x<$size;$x++){
        if($max<$tab[$x]){
            $max=$tab[$x];
        }
    }
    echo 'wartosc najwieksza to '.$max.'<br>';
    
    //
    echo 'srednia to '.$suma/$size;
   
?>
</body>
</html>