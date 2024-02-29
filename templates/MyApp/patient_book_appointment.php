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

$sql = "insert into appointment values('$patientname', '$date', '$time', '$email', '$phone_number', '$description')";
if ($conn->query($sql) === True) {
    echo "Appointment Booked Successfully";
}
$conn->close();
