<html>
    <body>
        <h1></h1>
<?php

     $tab = array( 12,4,56,78,123,07,213,56,231,676, );
    // $x=0;
    // foreach ($tab as $value) {
    //     $suma= $suma+1;
    // }
    // echo $suma;
    
    $size=sizeof($tab);
    for($x=0;$x<$size;$x++){
        $suma+=$tab[$x];
    }
    echo $suma;
?>
</body>
</html>