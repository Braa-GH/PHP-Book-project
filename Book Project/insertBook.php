
<?php
    require_once 'DBConnection.php';
    $note = "";
    if (isset($_POST['insert'])){
        $name = $_POST['book_name'];
        $author = $_POST['author'];

        if ( ! empty($name) || ! empty($author)){
            $sql = "INSERT INTO BookData (name,author) VALUES ('$name','$author')";

            if (mysqli_query($connection,$sql)){
                $note =  "Book $name inserted successfully";
            }else{
                $note = "Error occurred! " . mysqli_error($connection);
            }
        }else{
            $note = "Enter valid inputs!";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Insert Books Data</title>
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


    <form method="post" action="">
        <label>Book name: </label>
        <input type="text" name="book_name">
            <br>
        <label>Author: </label>
        <input type="text" name="author">
        <br>
        <input type="submit" value="insert" name="insert">
    </form>


    <br>
    <span> <?php echo $note ?></span>
</body>

<style>
    input{
        margin-bottom: 15px;
    }



</style>

</html>

