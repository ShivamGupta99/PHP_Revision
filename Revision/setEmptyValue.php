<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Empty value</title>
</head>

<body>
    <?php
    $fullname = $email = $gender = $comment = $number = $age = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST" || isset($_POST['submit'])) {
        $fullname = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $number = test_input($_POST['number']);
        $comment = test_input($_POST['comment']);
        $age = test_input($_POST['age']);
        $gender = test_input($_POST['gender']);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Form validation</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- we can also use  action="setEmptyValue.php" -->
        Full name: <input type="text" name="name" id="name">
        <br><br>
        Email: <input type="email" name="email" id="">
        <br><br>
        Number(optional): <input type="text" name="number" id="">
        <br><br>
        Age: <input type="text" name="age" id="">
        <br><br>
        Comment: <textarea type="text" name="comment" id="" rows="10" cols="10"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="Male" id="">Male
        <input type="radio" name="gender" value="female" id="">Female
        <br><br>
        <input type="submit" value="submit" name="submit">

    </form>

    <?php
    echo "<h2>Your Input : </h2>";
    echo $fullname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>
</body>

</html>