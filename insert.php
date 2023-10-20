<!DOCTYPE html>
<html>
    <head>
        <h1>insert data into the database</h1>
    </head>
    <body>
        <center>
            <?php
            require "dbconnect.php";

            $booktitle = $_REQUEST['book_title'];
            $author = $_REQUEST['author'];
    
            $sql = "INSERT INTO books (book_title, author)Values('$booktitle', '$author')";

            if($conn -> query($sql)===true){
                echo "records inserted successfully";
            }else{
                echo "error";
            }
            ?>
        </center>
    </body>
</html>