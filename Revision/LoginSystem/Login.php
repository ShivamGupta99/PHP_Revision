<?php
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require './components/dbConnect.php';
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `myuser` where phone='$phone' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        echo $num;
        if ($num == 1) {
            $login = true;
            header("location:Welcome.php");
        } else {
            $showError = true;
            echo "Failed to login";
        }
        if (!$result) {
            echo "Error";
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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./CSS/signup.css">
    <link rel="stylesheet" href="./CSS/Navbar.css">


    <title>Login page</title>
</head>

<body>
    <!-- ---------------------------------- Navbar ----------------------------------------------- -->
    <?php
    require './components/Navbar.php';
    if ($login) {
        echo `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> `;
    }
    if ($showError) {
        echo `<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`;
    }
    ?>
    <!-- ---------------------------------- Form ----------------------------------------------- -->
    <div class="container">
        <div class="box login">
            <form action="Login.php" method="post">
                <div class="parts">
                    <label for="phone">Phone :</label>
                    <input type="number" name="phone" id="phone" placeholder="+91 0000000000">
                </div>

                <div class="parts">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" placeholder="*****">
                </div>

                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>