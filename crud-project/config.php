<?php
$host     = "sql300.infinityfree.com";
$user     = "if0_41548994";
$password = "5RTZadsxFwCThB";
$dbname   = "if0_41548994_db_equipborrow";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>