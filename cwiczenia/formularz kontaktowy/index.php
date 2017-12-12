<html>
    <body>
        
        <form action="form.php" method="POST">
            <label>od kogo</label><br>
            <input type="email" name="from"/><br>
            <label>Do kogo</label></label><br>
            <input type="email" name="to"/><br>
            <label>Temat</label><br>
            <input type="text" name="title"/><br>
            <select name="category">
                  <option value="zakup" >zakup</option>
                  <option value="rekrutacja" >rekrutacja</option>
                  <option value="raport" >raport</option>
                  <option value="reklamacja" >reklamacja</option>
            </select><br>
            <textarea name="content" cols="100" rows="20"></textarea><br>
            <input type="submit" name="submit"/>
        </form>        
        
        <script type="text/javascript">
        
        </script>
        
    </body>
</html>