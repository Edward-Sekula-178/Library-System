<html>
<form action="SQLinstall.php" Method = "Post">
    

</html>
<?php
include_once("connection.php");
$Drop = $conn->prepare(
    "DROP DATABASE IF EXISTS library;");
$Drop -> excecute();
$DB = $conn-> prepare("CREATE DATABASE library;");
$DB -> excecute()
$Libusers = $conn->prepare("
    CREATE Table Libusers(PersonID INT(8) AUTO_INCREMENT,
    Username VARCHAR(20) NOT NULL,
    Passwd VARCHAR(20) NOT NULL,
    Forename VARCHAR(20) NOT NULL,
    Surname VARCHAR(20) NOT NULL,
    Perms INT(1) NOT NULL,
    Email VARCHAR(20),
    Strikes INT(1),
    PRIMARY KEY (PersonID,Surname));");
$Libusers -> excecute();
$Loaned = $conn->prepare("
    CREATE TABLE LoanedBooks(PersonID INT(8),
    BookNo VARCHAR(8),
    DueDate DATE,
    BookStatus bit);");
$loaned -> excecute();
$BookCatalogue = $conn->prepare("
    CREATE TABLE BookCatalogue(
    BookNo INT(8) AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(20) NOT NULL,
    ISBN INT(20) NOT NULL,
    Author VARCHAR(20) NOT NULL,
    Category VARCHAR(20) NOT NULL);");
$stmt -> excecute();
$stmt->closeCursor();
