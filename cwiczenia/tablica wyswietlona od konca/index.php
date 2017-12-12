<html>
    <body>
        <h1></h1>
<?php

     $tab = array( 12,5,56,78,123,7,213,56,4,676 );
     $size=sizeof($tab);
     $elements=$size-1;
     
    for($x = $elements; $x >= 0; $x--){
        echo $tab[$x].'<br>';
    }
    



   
?>
</body>
</html>