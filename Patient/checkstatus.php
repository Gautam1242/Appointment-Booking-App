<?php
include '../config/connect.php';
session_start();
if (!isset($_SESSION['name'])) {
    header('locaton:../LogSign/patientlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>View Appointment Status</title>
</head>

<body>
    <div class="container my-5">
    <a href="patientdashboard.php" class="text-light text-decoration-none w-100"><button
    class="btn btn-info my-3 w-100">Go Back</button></a>
        <h2 class="text-center">Appointment Status <i class="fa-solid fa-calendar-check"></i></h2>
        <div class="container my-4">
            <?php

            $name = $_SESSION['name'];

            $sql = "Select * from `appointment` where name='$name'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        echo '
                                <div class="card m-3" style="max-width: 970px;">
                                <div class="row g-9">
                                <div class="col-md-5">
                                <img src="../images/appointmentStatus.jpg" class="img-fluid rounded-start h-100 w-80" alt="...">
                                </div>
                                <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Doctor Name : ' . $row['doctor'] . '</h5>
                                    <h6 class="card-title">Status : ' . $row['operation'] . '</h6>
                                    <h6 class="card-title">Appointment Date : ' . $row['date'] . '</h6>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                ';

                    }
                } else {
                    echo '<h2 class="text-danger text-center">No Appointment Booked Till Now</h2>';
                }
            }
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>
</body>

</html>