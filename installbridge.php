<?php
include_once('functions.php');
$_POST= array_map('htmlspecialchars',$_POST);
DBinstall($_POST['confirmation'],$_POST['testdata']);
?>