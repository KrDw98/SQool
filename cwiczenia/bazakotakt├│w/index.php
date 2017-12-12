<?php
session_name('book');
session_start();
?>
<html>
    <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <h1>Dodaj nowy kontakt</h1>
        <form method="post" action="addcontact.php" >
            
          <label for="">Imie:</label></label><input type="text" name="name"/> <br>
          <label for="">Nazwisko:</label><input type="text" name="secondname"/> <br>
          <label for="">Nr. tel:</label><input type="number" name="phone"/> <br>
          <label for="">Ulica:</label><input type="text" name="street"/> <br> 
          <label for="">Miejcowość:</label><input type="text" name="city"/> <br>
          <label for="">Kod pocztowy:</label><input type="text" name="post"/> <br>   <br>       
           
            <input type="submit" name="send"/>
        </form> 
        
        <br><br><br>
        
                <h2>pokaz kontakty</h2>
        <form method="post" action="showcontacts.php" >
            <input type="submit" name="send"/>
        </form>
        
                <h2>edytuj kontaky</h2>
        <form method="post" action="editcontacts.php" >
            <input type="submit" name="send"/>
        </form> 
        
                <h2>usun kontakty</h2>
        <form method="post" action="deletecontacts.php" >
            <input type="submit" name="send"/>
        </form> 
        
    </body>
</html>
