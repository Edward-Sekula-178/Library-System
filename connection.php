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
?>
