<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shivam";

$conn = mysqli_connect("$servername", "$username", "$password", "$database");
if (!$conn) {
    die("Failed to connect to the server due to this reason --> " . mysqli_connect_error());
} else {
    echo "Connection was set up succesfully";
}
echo "<br>";
// ---------------------------- Delete query   ---------------------------------------------------------

$sql="DELETE FROM `form` WHERE `form`.`name` = 'Shivam Gupta' LIMIT 5";
$result = mysqli_query($conn, $sql);
if($result){
    echo"The record has been deleted succesfully! <br>";
}
else{
    echo"record has not been deleted because of thi error --->" .mysqli_error($conn);
}



?>