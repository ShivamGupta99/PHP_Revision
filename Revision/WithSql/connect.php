<?php
// Database name =blooddonation

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $database = "blooddonation";

    $conn = mysqli_connect($serverName,$username,$password,$database);
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bGroup'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bGroup = $_POST['bGroup'];
      
        $sql = "INSERT INTO `user` (`name`, `email`, `phone`, `bGroup`) VALUES ('$name', '$email', '$phone', '$bGroup')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "Successfully Submitted";
        } else {
            echo "Not Submitted";
        }
    }else{
        echo"Error!! Can't find data ";
    }
}else{
    echo"Connection Failed : ".mysqli_connect_error();   
}
?>