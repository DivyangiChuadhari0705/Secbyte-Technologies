<?php
// 1. Database कनेक्शन (no password वापरून)
$servername = "localhost";
$username = "root";
$password = "";  // ← इथे password जर लागतो तर द्या
$dbname = "shivsahyadri_db1";
$port = 4306; 
// 2. Connection बनवा
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// 3. Error चेक करा
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Form data safely घ्या
$name     = isset($_POST['name']) ? $_POST['name'] : '';
$email    = isset($_POST['email']) ? $_POST['email'] : '';
$phone    = isset($_POST['phone']) ? $_POST['phone'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$message  = isset($_POST['message']) ? $_POST['message'] : '';

// 5. SQL insert करा
$sql = "INSERT INTO contact_messages (name, email, phone , location, message)
VALUES ('$name', '$email', '$phone', '$location', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
