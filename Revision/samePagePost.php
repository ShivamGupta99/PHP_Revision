<!-- Post method does not give any information to url  -->


<?php
if (isset($_POST['name']) || isset($_POST['number'])) {
    echo "HI " . $_POST['name'];
    // echo "Hi " . $_POST['name'] . "<br>Your verified number is " . $_POST['number'];
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post on same page</title>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        Name : <input type="text" name="name">
        Phone : <input type="number" name="number" id="">
        <input type="submit" value="submit">
    </form>
</body>

</html>