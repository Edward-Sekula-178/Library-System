<?php
session_start();
include_once('functions.php');
countrows();
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
        $title=null;
        $pathvar=null;
        $element = "<div class='container'>
                    <img src=$pathvar class='coverobject' >
                    <a href=bookpage.php>$title</a>
                    </div>
                    ";
<<<<<<< Updated upstream
    $count = $_SESSION['limit'];
    foreach( range(1,$count) as $item){
        include_once('functions.php');
        $imgtitle=findtitle($item);
        $pathvar=findimg($imgtitle);
        echo $pathvar;
        echo $element;
=======
                    #<img src=$pathvar class='coverobject'>


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
>>>>>>> Stashed changes
    }
$fetch = $conn->prepare('SELECT * FROM bookcatalogue');
$fetch->execute();
while($row = $fetch->fetch(PDO::FETCH_ASSOC)){
    $allbooks=array($row['BookNo'],$row['Title'],$row['Author'],$row['Category']);
    print_r($allbooks) ;}
$fetch->closeCursor();
print_r ($return);
    $count = 50;
    // foreach( range(1,$count) as $item){
    //     include_once('functions.php');
    //     $imgtitle=findtitle($item);
    //     #$pathvar=findimg($imgtitle);
    //     echo $pathvar;
    //     echo $element;
    // }
    #echo "<img src='".$row['photo']."' />";
?>
</main class = 'main'>

</html>

