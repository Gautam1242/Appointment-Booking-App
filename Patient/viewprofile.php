<?php
include '../config/connect.php';
session_start();
if (!isset($_SESSION['name'])) {
    header('locaton:../LogSign/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patient Profile</title>
</head>

<body>
    <div class="container my-5">
        <a href="patientdashboard.php" class="text-light text-decoration-none w-100"><button
                class="btn btn-info w-100">Go Back</button></a>
        <h2 class="text-center my-3">Patient Profile <i class="fa-solid fa-user"></i></h2>
        <div class="card" style="max-width: 450px;">
            <div class="row g-0 ">
                <?php
                $name = $_SESSION['name'];

                $sql = "Select * from `patient` where name='$name'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            echo
                                '<div class="col-md-5">
                    <img src="../images/patientprofile.jpg" class="img-fluid rounded-start h-100 w-80" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                                    <h5 class="card-title">Name : ' . $row['name'] . '</h5>
                        <h6 class="card-title">Email : ' . $row['email'] . '</h6>
                        <h6 class="card-title">Password : ' . $row['password'] . '</h6>
                        <a href="updateprofile.php?updateid=' . $id . '" class="text-light text-decoration-none"><button class="btn btn-primary w-100">Update</button></a></div>
                </div>';
                        }
                    } else {
                        echo '<h2 class=text-danger>Data Not Found</h2>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>
</body>

</html>