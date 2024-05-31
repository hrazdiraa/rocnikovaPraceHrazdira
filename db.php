<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'my_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    exit('Connection failed: ' . mysqli_connect_error());
}
?>