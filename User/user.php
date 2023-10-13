<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into `user` (firstName,lastName,email,password)
    values('$firstName','$lastName','$email','$password')";

    $result = mysqli_query($con,$sql);
    if($result){
        echo "Data Inserted Successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
