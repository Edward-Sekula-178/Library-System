<?php

function Newuser($Username,$Passwd,$Forename,$Surname,$Perms,$Email){
    include_once('connection.php');
    $stmt -> conn prepare("INSERT INTO Libusers (Username, Passwd, Forename, Surname, Perms, Email)
    VALUES ($Username,$Passwd,$Forename, $Surname, $Perms, $Email,);");
    $stmt ->conn excecute();
    $conn=null;
}
?>