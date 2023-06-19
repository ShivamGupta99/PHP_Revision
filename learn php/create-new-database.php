<?php
// ---------------------- CREATING NEW DATABASE ----------------------
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  die("Sorry to failed to connect: " . mysqli_connect_error());
} else {
  echo "Connection was sucesfully";
}
echo "<br>";
$sql = "CREATE DATABASE shivam4";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "The db was created successfuly";
} else {
  echo "the db not created because of this ------->" . mysqli_error($conn);
}
