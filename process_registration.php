<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$student_id = $_POST['student_id'];
$date = $_POST['date'];
$installment = $_POST['installment'];


$sql = "INSERT INTO registrations (name, student_id, registration_date, installment) 
        VALUES ('$name', '$student_id', '$date', '$installment')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
