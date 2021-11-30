<?php
include_once ('connection.php');
array_map('htmlspecialchars',$POST)
$stmt = $conn->prepare ("SELECT * FROM libusers WHERE username =:Username ;");
$stmt->blindParam(":Username",$_POST["Username"])
$stmt->excecute()
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    if($row['Password']== $_POST['Pword']){
        header('Location: users.php');
    }
    else{

        header('Location: login.php');
    }
}
$conn=null;
?>