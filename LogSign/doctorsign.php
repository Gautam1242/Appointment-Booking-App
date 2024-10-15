<?php
$user = 0;
include '../config/connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $specialization = $_POST['specialization'];
    $fee = $_POST['fee'];
    $password = $_POST['password'];

    $sql = "select * from `doctor` where name='$name'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $user = 1;
        } else {
            // insert query
            $sql = "insert into `doctor` (name,email,specialization,fee,password) values ('$name','$email','$specialization','$fee','$password')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                // echo "DATA INSERTED SUCCESSSFULLY";
                header('location:login.php');
            } else {
                die(mysqli_error($con));
            }
        }
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Doctor Signup</title>
    <style>
        .form-group {
            padding: 4px;
        }
    </style>
</head>

<body>
    <?php
    if ($user) {
        echo '
        <div class="container  alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry Username already exists try some different username</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container my-5 p-3">
        <h2 class="text-center">Doctor Registration</h2>
        <div class="container my-5 p-3">
            <form method="post">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control p-2" id="name" placeholder="Enter your username" name="name"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control p-2" id="email" placeholder="Enter your email" name="email"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="specialization">Specialization</label>
                    <input type="text" class="form-control p-2" id="specialization"
                        placeholder="Enter your specialization" name="specialization" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="fee">Fees</label>
                    <input type="text" class="form-control p-2" id="fee" placeholder="Enter your fees" name="fee"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control p-2" id="password" placeholder="Enter your password"
                        name="password" autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-primary my-5" name="submit">Sign Up</button>
                <button class="btn btn-primary my-5"><a href="signup.php" class="text-white text-decoration-none">Go
                        Back</a></button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>