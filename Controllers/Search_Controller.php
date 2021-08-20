<?php
// (A) DATABASE CONNECTION
require "../Model/model.php";
$DB = new DB();

// (B) SEARCH FOR USERS
$results = $DB->select(
  "SELECT * FROM `users` WHERE CONCAT(FirstName, '', LastName) LIKE ? ",
  ["%{$_POST['search']}%"]
);


// (C) OUTPUT RESULTS
echo json_encode(count($results)==0 ? null : $results);

