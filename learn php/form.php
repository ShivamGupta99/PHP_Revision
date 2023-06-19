<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP Form</title>
</head>
<body>
    <!-- ------------------------------------- Navbar  ------------------------------------ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mywork/form">Home</a>
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
    <!-- ------------------------------------- Alert  ------------------------------------ -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $des = $_POST['des'];
        // $pass = $_POST['pass'];

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

             $sql ="INSERT INTO `form` (`name`, `email`, `des`, `date`) VALUES ('$name', '$email', '$des', current_timestamp())";
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


    <!-- ------------------------------------- Form  ------------------------------------ -->
    <div class="container my-3">

        <form action="form.php" method="post">
            <!-- -------------   Name  ----------------- -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
            </div>
            <!-- -------------   E-mail  ----------------- -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="e-mail" name="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!-- -------------   Passworrd  ----------------- -->
            <!-- <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div> -->
            <!-- -------------   Description  ----------------- -->
            <div class="mb-3">
                <label for="des" class="form-label" id="des"  >Concern</label>
                <textarea class="form-control" id="des" rows="3" name="des" required></textarea>
            </div>
            <!-- -----------------  checkbox  ---------------------- -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check" name="check">
                <label class="form-check-label" for="check">Are you sure</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>