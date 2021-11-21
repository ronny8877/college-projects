<!-- updating the value of course fineArts to PHD in psychology -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gehu";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `course` SET `name`='Phd' WHERE name = 'fineArts'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
