<html>
    <body>
    <?php
            require_once 'actions/db_connect.php';
            $result = mysqli_query($link, "SELECT * FROM LibraryItem WHERE isbn_code='" . $_GET['isbn'] . "'");
            $row = mysqli_fetch_array($result);
                
        ?>
        <form action="/BE17-CR4-Amina/actions/a_update.php" method="POST">
            Type <input type="text" name="type" value="<?php echo $row['type']; ?>"/><br/>
            Title <input type="text" name="title" value="<?php echo $row['title'] ?>"/><br/>
            ISBN Code <input type="text" value="<?php echo $row['ISBN_code'] ?>" disabled/><br/>
            Publisher name <input type="text" name="publisher_name" value="<?php echo $row['publisher_name'] ?>"/><br/>
            Publisher address <input type="text" name="publisher_address" value="<?php echo $row['publisher_address'] ?>"/><br/>
            Publisher date <input type="date" name="publisher_date" value="<?php echo $row['publisher_date'] ?>"/><br/>
            Author first name <input type="text" name="author_first_name" value="<?php echo $row['author_first_name'] ?>"/><br/>
            Author last name <input type="text" name="author_last_name" value="<?php echo $row['author_last_name'] ?>"/><br/>
            Short description <input type="text" name="description" value="<?php echo $row['short_description'] ?>"/><br/>
            Image <input type="text" name="image" value="<?php echo $row['image'] ?>"/><br/>
            <input type="text" style="display: none;" name="isbn" value="<?php echo $row['ISBN_code'] ?>"/><br/>

            <input type="submit" value="Update book"/>
        </form>
        <?php
            mysqli_close($link);
        ?>
    </body>
</html>
