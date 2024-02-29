<?php
$patientname = $_POST["patientname"];
$date = $_POST["date"];
$time = $_POST["time"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$description = $_POST["description"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'test1');
// Check connection   
if ($conn->connect_error) {
	die('Connection Failed = ' . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO appointment (patientname, date, time, email, phone_number, description) 
VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $patientname, $date, $time, $email, $phone_number, $description);
$stmt->execute();

$stmt->close();
$conn->close();

echo "<h1>Appointmented booked successfully</h1>";
