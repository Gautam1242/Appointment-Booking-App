<?php
include '../config/connect.php';
$id = $_GET['updateid'];
$sql = "select * from `doctor` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$specialization = $row['specialization'];
$fee = $row['fee'];
$password = $row['password'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $specialization = $_POST['specialization'];
    $fee = $_POST['fee'];
    $password = $_POST['password'];

    // insert query
    $sql = "update `doctor` set id=$id,name='$name',email='$email',specialization='$specialization',fee='$fee',password='$password' where id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "DATA UPDATED SUCCESSSFULLY";
        header('location:../LogSign/login.php');
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
        <h2 class="text-center">Update Profile</h2>
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
                    <label for="specialization">Specialization</label>
                    <input type="text" class="form-control" id="specialization" placeholder="Enter your specialization"
                        name="specialization" autocomplete="off" value=<?php echo $specialization ?>>
                </div>
                <div class="form-group">
                    <label for="fee">Fee</label>
                    <input type="text" class="form-control" id="fe" placeholder="Enter your specialization" name="fee"
                        autocomplete="off" value=<?php echo $fee ?>>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password"
                        name="password" autocomplete="off" value=<?php echo $password ?>>
                </div>
                <button type="submit" class="btn btn-primary my-5" name="submit">Update Profile</button>
                <button class="btn btn-primary"><a href="doctordashboard.php" class="text-light text-decoration-none">Go
                        Back</a></button>
            </form>
        </div>
    </div>
</body>

</html>