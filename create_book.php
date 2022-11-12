<html>
    <body>
        <form action="/create_book.php" method="POST">
            Type <input type="text" name="type"/><br/>
            Title <input type="text" name="title"/><br/>
            ISBN Code <input type="text" name="isbn"/><br/>
            Publisher name <input type="text" name="publisher_name"/><br/>
            Publisher address <input type="text" name="publisher_address"/><br/>
            Publisher date <input type="date" name="publisher_date"/><br/>
            Author first name <input type="text" name="author_first_name"/><br/>
            Author last name <input type="text" name="author_last_name"/><br/>
            Short description <input type="text" name="description"/><br/>
            Image <input type="text" name="image"/><br/>
            <input type="submit" value="Create book"/>
        </form>
    </body>
</html>

<?php
//phpinfo();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    //$link = mysql_connect('localhost:3306', 'root', '');
    $link = mysqli_connect("localhost:3306","root","root","BE17_CR4_Amina Brakmic_BigLibrary");    
    $sql = "INSERT INTO LibraryItem (type, title, ISBN_code, publisher_name, publisher_address, publisher_date, author_first_name, author_last_name, short_description, image) VALUES
     ('". $_POST['type'] ."','". $_POST['title'] ."','". $_POST['isbn'] ."','". $_POST['publisher_name'] . "','". $_POST['publisher_address'] ."','". $_POST['publisher_date'] ."','". $_POST['author_first_name'] ."','". $_POST['author_last_name'] ."','". $_POST['description'] ."','". $_POST['image'] ."')";
    if ($link->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
