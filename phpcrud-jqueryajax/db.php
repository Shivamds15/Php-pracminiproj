<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "Shiv@1234";
$db_name = "jqajax";

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
