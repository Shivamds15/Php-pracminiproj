<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $email_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($email_check_query);

    if ($result->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Email already exists"]);
    } else {
        $insert_query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($insert_query) === TRUE) {
            echo json_encode(["status" => "success", "message" => "User added successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
        }
    }
}

$conn->close();
?>
