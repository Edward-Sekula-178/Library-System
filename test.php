<?php
include_once('connection.php');
$countvar=1;
$fetchcommand = $conn->prepare("SELECT title FROM bookcatalogue WHERE bookno=1");
#$fetchcommand->bindParam(':countvar',$countvar);
$output=$fetchcommand->execute();
echo($output);
?>