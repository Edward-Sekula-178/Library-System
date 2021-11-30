<?php
include_once("connection.php");
$stmt = $conn->prepare(
    "DROP DATABASE IF EXISTS library;
    CREATE DATABASE library;")
$stmt -> excecute()
$stmt = $conn->prepare("
    CREATE Table Libusers(PersonID INT(8) AUTO_INCREMENT,
    Forename VARCHAR(20) NOT NULL,
    Surname VARCHAR(20) NOT NULL,
    Perms INT(1) NOT NULL,
    Email VARCHAR(20),
    Strikes INT(1),
    PRIMARY KEY (PersonID,Surname));")
$stmt -> excecute()
$stmt = $conn->prepare("
    CREATE TABLE LoanedBooks(PersonID INT(8),
    BookNo VARCHAR(8),
    DueDate DATE,
    BookStatus bit);")
$stmt -> excecute()
$stmt = $conn->prepare("
    CREATE TABLE BookCatalogue(
    BookNo INT(8) AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(20) NOT NULL,
    ISBN INT(20) NOT NULL,
    Author VARCHAR(20) NOT NULL,
    Category VARCHAR(20) NOT NULL);")
$stmt -> excecute()


$stmt->closeCursor()
