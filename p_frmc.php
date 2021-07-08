<?php
$r="example";

//s-connect
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
  $conn = new mysqli($servername, $username, $password,"mahal");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
//e-connect

 function FunctionName($conn)
{
    $sql = "INSERT INTO code (code)
VALUES ('John')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>