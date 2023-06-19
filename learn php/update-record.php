<?php
// ---------------------------- Connection set up ---------------------------------------------------

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
// --------------------------  Select list    -------------------------------------------
$sql = "SELECT * FROM `form`";
$result=mysqli_query($conn,$sql);
// echo var_dump($result);
$num = mysqli_num_rows($result);
echo $num;
echo $num . "Record found in the database<br>";
$no=1;
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo $no. " Hello ".$row['name']." Welcome to " .$row['des'];
        echo "<br>";
        $no=$no+1;
    }
}
echo "<br>";
// ---------------------------- Update list  ---------------------------------------------------

        //update  variables

$mail="shivam@gmail.com";
$no="34";


$sql="UPDATE `form` SET `email` = '$mail' WHERE `form`.`S.no` = '$no'";
$result=mysqli_query($conn,$sql);
echo var_dump($result);
$aff=mysqli_affected_rows($conn);
echo "Number of affected row :" . $aff ."<br>";
if($result){
    echo "We update the record successfully";
}
else{
    echo "We cannot update the record successfully";

}


?>