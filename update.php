<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id']; // Corrected this line to get 'id' from the URL
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['mobile']); // Changed 'mobile' to 'phone'
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Corrected SQL query syntax
    $sql = "UPDATE crud SET name='$name', email='$email', phone='$phone', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Updated successfully";
        header('location:display.php'); // Uncomment this line if you want to redirect after update
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
    <title>Update Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="off" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
