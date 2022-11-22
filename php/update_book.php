<html>
    <body>
    <?php

            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $link = mysqli_connect("localhost:3306","root","root","BE17_CR4_Amina Brakmic_BigLibrary");

            //phpinfo();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //$link = mysql_connect('localhost:3306', 'root', '');
                $sql = "UPDATE LibraryItem SET type='". $_POST['type'] ."',title='". $_POST['title'] ."',publisher_name='" 
                . $_POST['publisher_name'] . "',publisher_address='". $_POST['publisher_address'] ."',publisher_date='". $_POST['publisher_date'] 
                ."',author_first_name='". $_POST['author_first_name'] ."',author_last_name='". $_POST['author_last_name'] 
                ."', short_description='". $_POST['description'] ."', image='". $_POST['image'] ."' WHERE isbn_code='" . $_POST["isbn"] . "'";
                if ($link->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $result = mysqli_query($link, "SELECT * FROM LibraryItem WHERE isbn_code='" . $_GET['isbn'] . "'");
            $row = mysqli_fetch_array($result);
                
        ?>
        <form action="/update_book.php?isbn=<?php echo $_GET['isbn'] ?>" method="POST">
            Type <input type="text" name="type" value="<?php echo $row['type']; ?>"/><br/>
            Title <input type="text" name="title" value="<?php echo $row['title'] ?>"/><br/>
            ISBN Code <input type="text" name="isbn" value="<?php echo $row['ISBN_code'] ?>"/><br/>
            Publisher name <input type="text" name="publisher_name" value="<?php echo $row['publisher_name'] ?>"/><br/>
            Publisher address <input type="text" name="publisher_address" value="<?php echo $row['publisher_address'] ?>"/><br/>
            Publisher date <input type="date" name="publisher_date" value="<?php echo $row['publisher_date'] ?>"/><br/>
            Author first name <input type="text" name="author_first_name" value="<?php echo $row['author_first_name'] ?>"/><br/>
            Author last name <input type="text" name="author_last_name" value="<?php echo $row['author_last_name'] ?>"/><br/>
            Short description <input type="text" name="description" value="<?php echo $row['short_description'] ?>"/><br/>
            Image <input type="text" name="image" value="<?php echo $row['image'] ?>"/><br/>
            <input type="submit" value="Create book"/>
        </form>
    </body>
</html>
