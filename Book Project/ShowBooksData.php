
<?php
    require_once "DBConnection.php";
    $sql = "SELECT name,author FROM BookData";
    $result = $connection -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Show Books Data</title>
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
    <h1>Books Data</h1>


    <table border="1px">
        <tr>
            <td>Book name</td>
            <td>Author</td>
        </tr>

        <?php
            if ($result -> num_rows > 0){
                while ($row = $result -> fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "</tr>";
                }
            }
        ?>

    </table>
</body>
</html>

