<link rel="stylesheet" type="text/css" href="style.css" />
<?php


if(isset($_FILES['plik']))
            {       
                $file_name=md5(rand()*rand()+rand()).$_FILES['plik']['name'];
                        if ($_FILES['plik']['type'] == "image/jpeg" || $_FILES['plik']['type'] == "image/gif" || $_FILES['plik']['type'] == "image/png"){
                            move_uploaded_file($_FILES['plik']['tmp_name'], "images/".$file_name);
                            
                            $title= $_POST['title'];
                            $author= $_POST['author'];
                            $text= $_POST['content'];
                            
                            echo "<div class=\"title\"><div class=\"title\">" . $title . "</div>";
                            echo "<div class=\"images\"><img src=\"images/" . $file_name . "\"></div>";
                            echo "<div class=\"cont\">" . $text . "</div></div>";
                            echo "<div class=\"author\">" . $author . "</div>";
                             
                        }
                        else {
                           echo "niedozwolone rozszerzenie piku";
                           header('Location: index.php?msg=niedozwolone rozszerzenie');
                        }
                        

            }


           