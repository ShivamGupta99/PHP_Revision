<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>
    <style>
        .form-control {
            width: 300px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.klascement.net/files/1/0/4/3/0/4/l/google-forms-new-logo-1_original.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Form
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container my-3">
        <form action="fullform.php" method="POST">
            <!-- ----------------------------- Name ----------------------------------- -->
            <div class="mb-3">
                <label for="Name" class="form-label">Name </label>
                <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="name">
            </div>
            <!-- ----------------------------- Fname ----------------------------------- -->
            <div class="mb-3">
                <label for="father-name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="father-name" aria-describedby="emailHelp" name="fname">
            </div>
            <!-- ----------------------------- phone ----------------------------------- -->
            <div class="mb-3">
                <label for="phone" class="form-label">Mobile No.</label>
                <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" name="phone">
            </div>

            <!-- ----------------------------- dob ----------------------------------- -->
            <div class="mb-3">
                <label for="date">Date of birth</label>
                <input type="date" id="date" name="dob">
            </div>
            <!-- ----------------------------- e-mail ----------------------------------- -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <!-- ----------------------------- password ----------------------------------- -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text">We'll never share your email and password with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- ------------------------------------------------- PHP ------------------------------------------------------ -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        // ------------------------- Connect to server ----------------------

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "shivam";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Sorry! failed to connect the serer:" . mysqli_connect_error());
            echo "<br>";
        } else {
            echo "Succesfully conected to server" . "<br>";
                
            $sql = "INSERT INTO `contact` (`Name`, `Father's name`, `phone`, `email`, `pass`) VALUES ('$name', '$fname', '$phone', '$email', '$pass')";
           
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "The record has been submitted succesfully! <br>";
                echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congrulatiion ! </strong>Your email and password  has been submitted succesfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
            } else {
                // echo "record has not been recorded because of thi error --->" . mysqli_error($conn);
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed ! </strong>We are facing sometechnical issue so can`t submit form.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
            }
        }
    }
    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>