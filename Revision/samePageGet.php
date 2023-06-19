<!-- GET method gives information to the url  -->


<?php
if (isset($_GET["name"]) || isset($_GET["number"])) {
    echo "Hi " . $_GET['name'] . "<br>Your verified number is " . $_GET['number'];
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php page </title>
    <style>
        .m-1 {
            margin: 1rem;
        }
    </style>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" id="" class="m-1"><br>
        Phone: <input type="number" name="number" id="" class="m-1"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>