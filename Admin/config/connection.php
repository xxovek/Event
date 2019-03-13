<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'Event';
$con = new mysqli($serverName,$userName,$password,$dbName) or die(mysqli_error($con));
?>