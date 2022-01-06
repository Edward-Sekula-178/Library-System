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
        $element = "<div class='container'>
                    
                    <a href=bookpage.php>$title</a>
                    </div>
                    ";
                    #<img src=$pathvar class='coverobject'>
    $count = 50;
    foreach( range(1,$count) as $item){
        include_once('functions.php');
        $imgtitle=findtitle($item);
        #$pathvar=findimg($imgtitle);
        echo $pathvar;
        echo $element;
    }
    #echo "<img src='".$row['photo']."' />";
    ?>
</main class = 'main'>

</html>

