<?php

// Code to show all errors; remove in production
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include all neccesarry files
require('lib/commonFunctions.lib.php');
require('lib/dev.lib.php');
require('lib/digiva.lib.php');

// Connect to db and store connection
global $conn;
$conn = connectToDatabase();

//    $sql = "DELETE FROM trackTrace WHERE id = :id";
//    $sth = $conn->prepare($sql);
//    $sth->bindParam(':id', $trackingItemId);
//    $sth->execute();

Echo 'Hello World!';