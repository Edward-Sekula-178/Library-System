<?php session_start();
include_once('connection.php');
$countrows=('SELECT COUNT(*) FROM BookCatalogue');
$_SESSION['count']=$countrows->excecute();
$_SESSION['limit']='30';
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
    <div class="sidenav">
        <form action='searchbridge.php' method='POST'>
            <input type='radio' name='category' value='null' checked>No category<br>
            <input type='radio' name='category' value='SCIFI' checked>Sci-Fi<br>
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
        $element = "<div class='container'>
                    <img src='https://cdn-images-1.medium.com/max/174/0*Pc5OQpBHX0bzFPZ0.'class='coverobject' >
                    <p>foundation and earth</p>
                    </div>
                    ";
    $count = $_SESSION['limit'];
    foreach( range(1,$count) as $item){
        echo $element;
    }
    ?>
</main class = 'main'>

</html>

function loadimg($title){
    
    $imgpath='C:\xampp\htdocs\Library-System\Images';
    header('Content-Type: image/jpeg');
    readfile($img);
}