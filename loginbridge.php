<?php
include_once('functions.php');
$_POST=array_map('htmlspecialchars', $_POST);
if ($_POST['user']=='' or $_POST['pass']==''){
    echo('username or password field empty')
}
login($_POST['user'],$_POST['pass']);
?> 