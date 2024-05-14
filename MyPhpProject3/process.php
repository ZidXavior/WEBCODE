<?php
    $name = $_POST['name'];
    $id = $_POST['id'];
    $dept = $_POST['dept'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO student VALUES ('','$name','$id','$dept','$email','$address')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); 
?>