<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "shivsahyadri_db1";
$port = 4306; 

$conn = new mysqli($servername, $username, $password, $dbname,$port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name     = isset($_POST['name']) ? $_POST['name'] : '';
$email    = isset($_POST['email']) ? $_POST['email'] : '';
$phone    = isset($_POST['phone']) ? $_POST['phone'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$message  = isset($_POST['message']) ? $_POST['message'] : '';


$sql = "INSERT INTO contact_messages (name, email, phone , location, message)
VALUES ('$name', '$email', '$phone', '$location', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
