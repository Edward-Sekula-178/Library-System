<?php
session_start();
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
    echo('successfully connected to DB');
    }
catch(PDOExeption $e)
    {
        echo "Connecin Failed" . $e->getMessage();
    }

$title=null;
$pathvar=null;
$element = "<button class='container'>
            <img src=$pathvar class='coverobject'>
            <form  href=bookpage.php>$title</a>
            </button>
            ";
//fetch data to bee moved into a function soon.
$fetch = $conn->prepare('SELECT * FROM bookcatalogue');
$fetch->execute();
while($row = $fetch->fetch(PDO::FETCH_ASSOC)){
    include_once('functions.php');
 
    $book=array($row['bookno'],$row['title'],$row['author'],$row['category']);
    print_r($book);
    $imgsource=imgsource($row['title']);}
$fetch->closeCursor();


    #$pathvar=findimg($imgtitle);
    #echo "<img src='".$row['photo']."' />";
?>
</main class = 'main'>

</html>

