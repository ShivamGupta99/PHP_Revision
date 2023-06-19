<?php
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    require './components/dbConnect.php';
    if (!$conn) {
        die("Failed due to :");
    } else {
        if (isset($_POST['name']) && isset($_POST['fname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $fname = $_POST['fname'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $cPassword = $_POST['cPassword'];
            if ($password == $cPassword) {
                $sql = "INSERT INTO `myuser` (`name`, `fname`, `phone`, `password`) VALUES ('$name', '$fname', '$phone', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "Sign UP successfully done";
                    header("location:login.php");
                } else {
                    $showError = true;
                    echo "Password not match";
                }
            }
        } else {
            echo "Data not found";
            exit();
        }
    }
}
?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="./CSS/signup.css">
    <link rel="stylesheet" href="./CSS/Navbar.css">
    <title>Sign Up page</title>
</head>

<body>
    <!-- ---------------------------------- Navbar ----------------------------------------------- -->
    <?php
    require './components/Navbar.php';
    ?>
    <!-- ---------------------------------- Form ----------------------------------------------- -->
    <div class="container">
        <div class="box">
            <form action="SignUp.php" method="post">
                <div class="parts">
                    <label for="Name">Name :</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="parts">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="abc@gmail.com">
                </div>
                <div class="parts">
                    <label for="fname">Father's Name :</label>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="parts">
                    <label for="phone">Phone :</label>
                    <input type="number" name="phone" id="phone" placeholder="+91 0000000000">
                </div>
                <div class="parts">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" placeholder="*****">
                </div>
                <div class="parts">
                    <label for="password">Confirm Password :</label>
                    <input type="password" name="cPassword" id="cPassword" placeholder="*****">
                </div>
                <?php
                if ($showError) {
                    echo '<h2>Password not match</h2>'.$showError;
                }
                ?>
                <input type="submit" value="submit" class="submit" style="padding: 0.3rem 0.5rem;text-transform:capitalize">
            </form>
        </div>
    </div>



</body>

</html>