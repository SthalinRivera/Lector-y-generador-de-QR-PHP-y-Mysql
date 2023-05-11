<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get data from the POST request
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];

// Insert data into the database
$sql = "INSERT INTO test (name, age, email) VALUES ('$name', '$age', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "Data saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
