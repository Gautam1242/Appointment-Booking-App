<?php
include '../config/connect.php';

session_start();
$id = $_GET['updateid'];
$sql = "select * from `patient` where id=$id";
$result = mysqli_query($con, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "update `patient` set id=$id,name='$name',email='$email',password='$password' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location:../LogSign/login.php");
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Profile</title>
    <style>
        .form-group {
            padding: 4px;
        }
    </style>
</head>

<body>
    <div class="container my-5 p-3">
        <h2 class="text-center">Update Profile <i class="fa-solid fa-user"></i></h2>
        <div class="container my-5 p-3">
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                        autocomplete="off" value=<?php echo $name ?>>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"
                        autocomplete="off" value=<?php echo $email ?>>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password"
                        name="password" autocomplete="off" value=<?php echo $password ?>>
                </div>
                <button type="submit" class="btn btn-primary my-5" name="submit">Update Profile</button>
                <button class="btn btn-primary"><a href="patientdashboard.php"
                        class="text-light text-decoration-none">Go
                        Back</a></button>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>

</body>

</html>