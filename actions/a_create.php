<?php
require_once 'db_connect.php';

if ($_POST) {   
    //$link = mysql_connect('localhost:3306', 'root', '');
    $sql = "INSERT INTO LibraryItem (type, title, ISBN_code, publisher_name, publisher_address, publisher_date, author_first_name, author_last_name, short_description, image) VALUES
     ('". $_POST['type'] ."','". $_POST['title'] ."','". $_POST['isbn'] ."','". $_POST['publisher_name'] . "','". $_POST['publisher_address'] ."','". $_POST['publisher_date'] ."','". $_POST['author_first_name'] ."','". $_POST['author_last_name'] ."','". $_POST['description'] ."','". $_POST['image'] ."')";
    if ($link->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      mysqli_close($link);

} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>