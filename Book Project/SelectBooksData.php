


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Select Books Data</title>
</head>
<body>
    <header>
        <ul>
            <li> <a href="index.html">Home Page</a> </li>
            <li> <a href="insertBook.php">Insert New Book</a> </li>
            <li> <a href="ShowBooksData.php">Show Books Data</a> </li>
            <li> <a href="SelectBooksData.php">Select Books Data</a> </li>
        </ul>
    </header>
    <h1>Select Books Data</h1>
    <form method="post" action="">
        <label for="">Author: </label>
        <input type="text" name="author">
        <input type="submit" value="show" name="select">
    </form>
    <hr>
</body>
</html>

<?php
    require_once "DBConnection.php";
    if (isset($_POST['select'])){
        $author = $_POST['author'];
        $sql = "SELECT name, author FROM bookdata WHERE author = '$author'";
        $result = $connection -> query($sql);

        if ($result -> num_rows > 0){
            echo "<h2>Books authored by $author</h2>";
            echo "<table border='1px'>";
            echo "<tr> <td>Book name</td> </tr>";
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
            }
            echo "</table>";

        }else{
            echo "Author $author does not has books here!";
        }

    }
















