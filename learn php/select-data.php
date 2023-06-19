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
// -----------------------------  Update query   ----------------------------------------------------------

$sql = "SELECT * FROM `form`";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo $num;
// ---------------------------------- See the data of database -------------------------------------------
echo " Record was found in tha database";
echo "<br>";
$no = 1;
if ($num > 0) {
    // $row = mysqli_fetch_assoc($result);
    // echo ($row);
    // echo "<br>";
    while($row=mysqli_fetch_assoc($result)){
        echo $no. " Hello ".$row['name']." Welcome to " .$row['des'];
        echo "<br>";
        $no=$no+1;
    }
}
