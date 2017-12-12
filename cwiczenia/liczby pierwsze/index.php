<html>
    <body>
        <h1></h1>
<?php

     $tab = array( 12,4,56,78,123,07,213,56,231,676, );

     $size=sizeof($tab);
    
    for($x=0;$x<$size;$x++){
        
        $n=$tab[$x];
        
        echo $n."zmienna a <br>";
        
        $q=$n/$n;
        $w=round($n/2,1);
        $e=round($n/3,1);
        $r=round($n/10,1);
        $t=round($n/7,1);
        
        echo $q."<br>";
        echo $w."<br>";
        echo $e."<br>";
        echo $r."<br>";
        echo $t."<br>";

    }

    
//          $tab = array( 12,4,56,78,123,7,213,56,231,676, );
//      $elements=sizeof($tab);

   
//     function primefactor($number) {
// 	        $sqrt = sqrt($number);
	
// 	        for ($x = 2; $x <= $sqrt; $x++) {
	    
// 		        if ($number % $x == 0) {
// 			    return array_merge(primefactor($number/$x), array($x));
// 		        }
//     	    }
	
// 	return array($number);
//     }


//  for ($y=0; $y<$elements; $y++){
// $prime = primefactor($tab[$y]); 
// if ($prime[0]==$tab[$y] ){
//     echo "liczba ".$tab[$y] . " jest liczba pierwsza <br>";
// }


?>
</body>
</html>