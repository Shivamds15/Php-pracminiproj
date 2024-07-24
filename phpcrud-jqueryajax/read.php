<?php

include 'db.php';

$result = $conn->query("SELECT * FROM users");
$users = array();

while ($row = $result->fetch_assoc()) {
    $row['name'] = ucfirst($row['name']);
    $users[] = $row;
}

echo json_encode($users);

$conn->close();
?>
