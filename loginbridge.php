<?php
session_start();
include_once('functions.php');
$_POST=array_map('htmlspecialchars', $_POST);
$_SESSION['message']=''
if ($_POST['user']=='' or $_POST['pass']==''){
    $_SESSION['message']=('username or password field empty');
    header('location: login.php');
}
else{$_POST['user']=strtolower($_POST['user']);
    login($_POST['user'],$_POST['pass']);}
?>