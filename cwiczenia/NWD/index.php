<html>
    <body>
        <h1>NWD</h1>
<?php


$x= 144;
$y= 10;

while($x!=$y){
  
        if($x>$y){
            $x-=$y;
        }
        if($y>$x){
            $y-=$x;
        }
    
}
echo $x
?>
</body>
</html>