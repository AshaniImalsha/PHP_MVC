<?php
// (A) DATABASE CONNECTION
require "../Model/model.php";
$DB = new DB();

// (B) SEARCH FOR USERS
$results = $DB->insert(
  "INSERT INTO `users` (`EmpID`, `FirstName`, `LastName`, `Password`) VALUES ('".$_POST['empid']."','".$_POST['fname']."','".$_POST['lname']."',md5('".$_POST['password']."')) " 
);



