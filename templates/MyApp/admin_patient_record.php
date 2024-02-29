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
$sql = " SELECT * FROM registration ";
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
        <h1>Patients Data</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th><a href="http://localhost/phpmyadmin/index.php?route=/sql&db=test1&table=registration&sql_query=SELECT+%2A+FROM+%60registration%60++%0AORDER+BY+%60registration%60.%60Doctor_Advise%60+DESC&sql_signature=0d031f8ae3285a9513601b27647ccd9861439dd0a8f3a102974f7ce3c3f7a5cd&session_max_rows=25&is_browse_distinct=0">Doctor Advise</a></th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['Phone Number']; ?></td>
                    <td><?php echo $rows['Doctor_Advise']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>