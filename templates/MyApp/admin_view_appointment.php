<?php

$user = 'root';
$password = '';
$dbname = 'test1';
$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $dbname
);


// Create connection
$conn = new mysqli('localhost', 'root', '', 'test1');
// Check connection   
if ($conn->connect_error) {
    die('Connection Failed = ' . $conn->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM appointment ORDER BY `date` DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View appointment</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1>Appointment</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Patientname</th>
                <th>Date</th>
                <th>Time</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Description</th>
                <th>Prescription</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['patientname']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td><?php echo $rows['time']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['phone_number']; ?></td>
                    <td><?php echo $rows['description']; ?></td>
                    <td><?php echo $rows['prescription']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>