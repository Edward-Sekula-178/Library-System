<?php
include_once('functions.php');
$_POST=array_map('htmlspecialchars', $_POST);
if ($_POST['user']=='' or $_POST['pass']=='' or $_POST['forename']==''
    or $_POST['surname']==''or $_POST['email']==''){
    echo('Please fill all fields');
    header('location: create_account.php');}
else{
    #$hashpass= password_hash($_POST['pass'],PASSWORD_DEFAULT);
    $_POST =array_map('strtolower',$_POST);
    #$_POST['pass']=$hashpass;
    
    Newuser($_POST['user'],$_POST['pass'],$_POST['forename'],
    $_POST['surname'],$_POST['email'],$_POST['perms']);

    header('location: login.php',);}
?> 