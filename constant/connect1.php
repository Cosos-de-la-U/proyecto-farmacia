<?php
/* Local Database*/

$servername = "host.docker.internal";
$username = "root";
$password = "nike";
$dbname = "farmacia";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, 3306);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . $conn);
}
