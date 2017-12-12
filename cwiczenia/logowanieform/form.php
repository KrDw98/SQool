<?php
// echo"<pre>";
// $Formularz = $_POST;
// print_r($Formularz);
// echo"</pre>";

       $test_login =isset($_POST['login']); 
       $test_haslo =isset($_POST['pass']); 

       $login='user';
       $haslo='password';
 
 
       if($test_login==1&&$test_haslo==1){
          if($_POST['login']==$login&&$_POST['pass']==$haslo){
            
              echo "Brawo ".$login." udalo Ci sie zalogowac";
          }
          else{
            //   header("location:index.html");
              echo '<form action="form.php"  method="POST">
                    <label>Login</label><br>
                    <input type="test" name="login"/><br>
                    <label>haslo</label><br>
                    <input type="password" name="pass"/><br>
                    <input type="submit" name="submit"/>
                    </form>  ';
              echo "bledny login lub haslo";
          }
    
    
       }
