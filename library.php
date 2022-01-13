<?php
session_start();
$imgsource='images\\foundation.jpg';
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

class book_object{
    public $title;
    public $imgpath;
    public $value;
    
    function set_vars($title,$imgpath,$value){
        $this->title =$title;
        $this->imgpath =$imgpath;
        $this->value=$value;
        echo $this->$title;
    }

    function output_book(){
        $imgpathtoelement= $this->$imgpath;
        $valuetoelement=$this->$value;
        $titletoelement=$this->$title;

        $element= "<div class='container'>
        <img src='<?php echo $imgpathtoelement; ?>' class='coverobject'>
        <form action='bookpage.php' method='POST' value=<?$valuetoelement;?> ><? echo $titletoelement;?></a>
        </div>
        ";
        echo $element;
    }

}

//fetch data to bee moved into a function soon.
$fetch = $conn->prepare('SELECT * FROM bookcatalogue');
$fetch->execute();
while($row = $fetch->fetch(PDO::FETCH_ASSOC)){
    include_once('functions.php');
    $book=array($row['bookno'],$row['title'],$row['author'],$row['category']);
    $booktitle = $row['title'];
    $imgsource=imgsource($booktitle);

    $$booktitle = new book_object();
    $$booktitle->set_vars($row['title'],$imgsource,$row['bookno']);
    $$booktitle->output_book();
    }
$fetch->closeCursor();


    #$pathvar=findimg($imgtitle);
    #echo "<img src='".$row['photo']."' />";
?>
</main class = 'main'>

</html>

