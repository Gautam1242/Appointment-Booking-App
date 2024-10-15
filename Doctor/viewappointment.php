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
    <title>Doctor Panel</title>
</head>

<body>
    <div class="container my-5">
    <a href="doctordashboard.php" class="text-light text-decoration-none w-100"><button
    class="btn btn-info my-3 w-100">Go Back</button></a>
        <h2 class="text-center">All Appointments <i class="fa-regular fa-calendar-check"></i></h2>
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                $name=$_SESSION['name'];
                $sql = "select * from `appointment` where doctor='$name'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $date = $row['date'];
                            $status=$row['operation'];
                            echo
                                '
                    <div class="col">
                <div class="card">
                    <img src="../images/appointment.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Appointment ID : ' . $id . '</h5>
                        <h5 class="card-title">Patient Name : ' . $name . '</h5>
                        <h5 class="card-title">Patient Email : ' . $email . '</h5>
                         <h5 class="card-title">Appointment Date : ' . $date . '</h5>
                          <h5 class="card-title">Appointment Status : ' . $status . '</h5>
                        <a href="updateAppointmentStatus.php?updateid=' . $id . '" class="text-light text-decoration-none"><button class="btn btn-info w-100">Update Status</button></a>
                        
                    </div>
                </div>
            </div>
                    ';
                        }
                    } else {
                        echo '<h2 class="text-center text-info">No Appointments Booked Till Now</h2>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>
</body>

</html>