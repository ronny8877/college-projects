<!-- retring data from gehu/courses and displaying it in a table format -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gehu";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>id</th><th>name</th>><th>duration</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td> <td>" . $row["duration"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();