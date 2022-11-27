<?php
//phpinfo();
require_once 'actions/db_connect.php';
//$link = mysql_connect('localhost:3306', 'root', '');


$result = mysqli_query($link, "SELECT * FROM LibraryItem");
echo "<a href='/BE17-CR4-Amina/create_book.php'>Create new book</a>";
echo "<table>";
echo "<tr>";
echo "<th>type</th>";
echo "<th>title</th>";
echo "<th>ISBN_code</th>";
echo "<th>publisher_name</th>";
echo "<th>publisher_address</th>";
echo "<th>publisher_date</th>";
echo "<th>author_first_name</th>";
echo "<th>author_last_name</th>";
echo "<th>short_description</th>";
echo "<th>image</th>";
echo "<th>action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)) {             
    echo "<tr>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['ISBN_code'] . "</td>";
    echo "<td>" . $row['publisher_name'] . "</td>";
    echo "<td>" . $row['publisher_address'] . "</td>";
    echo "<td>" . $row['publisher_date'] . "</td>";
    echo "<td>" . $row['author_first_name'] . "</td>";
    echo "<td>" . $row['author_last_name'] . "</td>";
    echo "<td>" . $row['short_description'] . "</td>";
    echo "<td>" . $row['image'] . "</td>";
    echo "<td><a href='/BE17-CR4-Amina/update_book.php?isbn=" . $row['ISBN_code'] . "'>Update</a></td>";
    echo "<td><a href='/BE17-CR4-Amina/actions/a_delete.php?isbn=" . $row['ISBN_code'] . "'>Delete</a></td>";
    echo "</tr>";  
}   

echo "</table>";
mysqli_close($link);


