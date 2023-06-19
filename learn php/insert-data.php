<?php
$servername="localhost";
$username="root";
$password="";
$database="shivam";
// ------------------------- Connect to server ----------------------
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry! failed to connect the serer:".mysqli_connect_error());
}
else{
    echo"Succesfully conected to server";
}
echo "<br>";

// ---------------------- Insert the value  ------------------------------------------
    //    ######    Variables   ######
    $name="Shivam Gupta";
    $destination="Mumbai";

    // $sno="5"
// $sql="INSERT INTO `trip` (`S.no.`,`name`, `dest`) VALUES ('$sno','$name','$destination')";

$sql="INSERT INTO `form` (`name`, `des`) VALUES ('$name','$destination')";
$result= mysqli_query($conn,$sql);

if($result){
    echo"The record has been submitted succesfully! <br>";
}
else{
    echo"record has not been recorded because of thi error --->" .mysqli_error($conn);
}
?>