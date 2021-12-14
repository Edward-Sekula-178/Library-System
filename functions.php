<?php

function login($user,$pass){
    include_once ('connection.php');
    $logindata = $conn->prepare ("SELECT * FROM libusers WHERE username=$user ;");
    #$logindata->blindParam(":username",$user);
    $logindata->excecute();
    while ($row = $logindata->fetch(PDO::FETCH_ASSOC))
    { 
        if($row['Password']==$pass){
            header('Location: users.php');}
        else{
            echo('login failed');
            header('Location: login.php');}
    }
    $conn=null;
}

function Newuser($Username,$Passwd,$Forename,$Surname,$Perms,$Email){
    include_once('connection.php');
    $stmt = $conn->prepare("INSERT INTO Libusers (Username, Passwd, Forename, Surname, Perms, Email)
    VALUES ($Username,$Passwd,$Forename, $Surname, $Perms, $Email);");
    $stmt-> execute();
    $stmt-> closeCursor();
    $conn=null;
}


function DBinstall($confirmation,$testdata){
    include_once('connection.php');
    if ($confirmation == 'Confirmation'){
        $Initialisation = $conn->prepare("
            DROP TABLE IF EXISTS Libusers;
            DROP TABLE IF EXISTS LoanedBooks;
            DROP TABLE IF EXISTS BookCatalogue;
            DROP TABLE IF EXISTS categorycode;

            CREATE Table Libusers(
                PersonID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Username VARCHAR(20) NOT NULL,
                Passwd VARCHAR(20) NOT NULL,
                Forename VARCHAR(20) NOT NULL,
                Surname VARCHAR(20) NOT NULL,
                Perms INT(1) NOT NULL,
                Email VARCHAR(20),
                Strikes INT(1));

            CREATE TABLE LoanedBooks(
                PersonID INT(8),
                BookNo VARCHAR(8),
                DueDate DATE,
                BookStatus bit);

            CREATE TABLE BookCatalogue(
                BookNo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Title VARCHAR(20) NOT NULL,
                ISBN INT(20) NOT NULL,
                Author VARCHAR(20) NOT NULL,
                Copies INT(2),
                Category INT(2) NOT NULL);
            
            CREATE TABLE categorycode(
                categoryNo INT(2) UNSIGNED PRIMARY KEY,
                categoryName VARCHAR(20) NOT NULL);
            ");
        $Initialisation->execute();
        $Initialisation->closeCursor();
        echo("database initialised successfully");
            }
        if ($testdata=='true'){
            $userdata=  "INSERT INTO Libusers   (Username,Passwd,Forename,Surname,perms,Email,Strikes)
                                VALUES          ('David123','1234','David','Lees',1,'davidlees@gmail.com',0),
                                                ('Sneed178','1234','Ned','Sekula',3,'sneed178@gmail.com',0)
                                                ('Librarian','1234','libby','Ravenhill',2,'libby@gmail.com',0)";
            $bookdata = "INSERT INTO BookCatalogue  (Title,ISBN,Author,Category)
                        VALUES                      ('Foundation',9780008117498,'Asimov',1)
                                                    ('Foundation and Empire',9780345309006,'Asimov',1)";
            $category = "INSERT INTO categorycode   (categoryNo., categoryName)
                                        VALUES      (1,'SCI-FI')";

            
            echo("Database reebooted succesfully. Testdata has been added.");
        }
    else{
        echo("Confirmation not recieved.");
    }
    $conn=null;}
?>