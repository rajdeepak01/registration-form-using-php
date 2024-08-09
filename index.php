<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile']; // Changed 'mobile' to 'phone'
    $password = $_POST['password'];

    $sql = "INSERT INTO `crud` (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Data inserted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>doc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
<div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
