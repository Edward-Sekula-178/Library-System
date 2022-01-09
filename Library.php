<?php
session_start();
include_once('functions.php');
$_SESSION['bookdata']=loadbookdata();
echo $_SESSION['bookdata'];
echo count($_SESSION['bookdata']);
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
    <div class="sidenav">
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
        $k=null;
        $element = "<div class='container'>
                    <img src=$pathvar class='coverobject' >
                    <form action=bookpage.php value=$k>$title</form>
                    </div>
                    ";
    #$count = $_SESSION['limit'];
    foreach(range(0,count($_SESSION['bookdata'])) as $k){
        include_once('functions.php');
        $title=[$k-1][0];
        $pathvar=findimg($title);
        echo $pathvar;
        echo $element;
    }
    #echo "<img src='".$row['photo']."' />";
    ?>
</main class = 'main'>

</html>

