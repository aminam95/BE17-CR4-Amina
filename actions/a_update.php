<?php
require_once 'db_connect.php';
if ($_POST) {    
        $sql = "UPDATE LibraryItem SET type='". $_POST['type'] ."',title='". $_POST['title'] ."',publisher_name='" 
            . $_POST['publisher_name'] . "',publisher_address='". $_POST['publisher_address'] ."',publisher_date='". $_POST['publisher_date'] 
                ."',author_first_name='". $_POST['author_first_name'] ."',author_last_name='". $_POST['author_last_name'] 
                ."', short_description='". $_POST['description'] ."', image='". $_POST['image'] ."' WHERE isbn_code='" . $_POST["isbn"] . "'";
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
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update_book.php?isbn=<?=$_POST["isbn"];?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>