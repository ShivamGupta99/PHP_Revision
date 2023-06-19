<!-- Request shoes output on the same page without effecting other -->

<?php
if (isset($_REQUEST['name']) || isset($_REQUEST['phone'])) {
    echo "Hi " . $_REQUEST['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request on same page</title>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        Name : <input type="text" name="name">
        Phone : <input type="number" name="number" id="">
        <input type="submit" value="submit">
    </form>
</body>

</html>