<?php
session_start();
<<<<<<< Updated upstream
$imgsource='images\\foundation.jpg';
=======
include_once('functions.php');
$_SESSION['bookdata']=loadbookdata();
echo $_SESSION['bookdata'];
echo $_SESSION['bookdata'];
echo count($_SESSION['bookdata']);
>>>>>>> Stashed changes
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
    <div class="">
        <form action='searchbridge.php' method='POST'>
            <input type='radio' name='category' value='null' checked>No category<br>
            <input type='radio' name='category' value='SCIFI' >Sci-Fi<br>
            <input type='submit' value='apply'>
        </form>
</div>
<main class = 'main'>
    <header>
        <form action='seachbridge.php' method='POST'>
            Search phrase:<input type=Text name='searchphrase'>
            <input type='radio' name='field' value='ISBN' checked>Title<br>
            <input type='radio' name='field' value='author' checked>Author<br>
            <input type='radio' name='field' value='title' checked>ISBN<br>
            <input type='submit' value='Apply'>
        </form>
    </header>
<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "library";

try{
    $opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES, false
        ];
    $conn=new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass, $opts);
    }
catch(PDOExeption $e)
    {
        echo "Connecin Failed" . $e->getMessage();
    }

//fetch data to bee moved into a function soon.
$fetch = $conn->prepare('SELECT * FROM bookcatalogue');
$fetch->execute();
while($row = $fetch->fetch(PDO::FETCH_ASSOC)){
    include_once('functions.php');
    $booktitle = $row['Title'];
    $imgsource=imgsource($booktitle);
    echo ("

        <button class='container' type= 'submit' formaction='bookpage.php' value=".$row['BookNo'].">
        <img src=".$imgsource." class='coverobject'>
        <p>".$booktitle."</p>
        </button>");
   # $$booktitle = new book_object();
    #$$booktitle->set_vars($row['Title'],$imgsource,$row['BookNo']);
   # $$booktitle->output_book();
    }
$fetch->closeCursor();


    #$pathvar=findimg($imgtitle);
    #echo "<img src='".$row['photo']."' />";
?>
</main class = 'main'>

</html>

