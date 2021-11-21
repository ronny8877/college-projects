<!-- inserting into db gehu -->


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gehu";

    //creating an array of first names
     $first = array("MCA" , "B.Tech" ,"BCA" ,"B.Com", "B.Sc It" ,"MBA" ,"FineArts");


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected to database successfully";

    //selecting a random value from the array
    
foreach ($first as $value) {
    $random = rand(3,8);
   $sql = "INSERT INTO `course`(`name`, `duration`) VALUES ('$value','$random')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

    echo "Inserting data";
    

   
    $conn->close();
?>