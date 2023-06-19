<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <h1>Blood Donation Camp</h1>
    <form action="connect.php" method="POST">
        <label for="user">Name :</label>
        <input type="text" name="name" id=""> <br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id=""> <br><br>
        <label for="phone">Phone :</label>
        <input type="number" name="phone" id=""> <br><br>
        <label for="bGroup">Blood Group :</label>
        <input type="text" name="bGroup" id=""> <br><br>
        <input type="submit" value="submit" name="submit">
    </form>


</body>

</html>