<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <form action="form.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Plik</label><input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                <input type="file" name="plik" />
                <label>Autor</label><input type="text" name="author"/> <br>
            <label>Tytuł</label>    
            <input type="text" name="title"/> <br>
            <label>Treść</label><br>    
            <textarea rows="10" cols="50" name="content"></textarea><br>
                <input type="submit" value="wyslij" /> <br>
                 <input type="reset" name="reset"/>
                
            </div>
        </form>

    </body>
</html>

                
                