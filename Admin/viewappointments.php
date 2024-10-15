<?php
include '../config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container my-5">
        <a href="admindashboard.php" class="text-light text-decoration-none w-100"><button
                class="btn btn-info my-3 w-100">Go Back</button></a>
        <h1 class="text-center">All Appointments <i class="fa-solid fa-truck-medical"></i>
            <?php
            $sql = "select * from `appointment`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $row = mysqli_num_rows($result);
                echo $row;
            }
            ?>
        </h1>
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                $sql = "select * from `appointment`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $doctor = $row['doctor'];
                            $email = $row['email'];
                            $status = $row['operation'];
                            $date = $row['date'];
                            echo
                                '
                    <div class="col">
                <div class="card">
                    <img src="../images/appointment.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-white text-center">
                        <h5 class="card-title">Appointment ID : ' . $id . '</h5>
                        <h5 class="card-title">Patient Name : ' . $name . '</h5>
                        <h5 class="card-title">Patient Email : ' . $email . '</h5>
                        <h5 class="card-title">Doctor Name : ' . $doctor . '</h5>
                        <h5 class="card-title">Status : ' . $status . '</h5>
                        <h5 class="card-title">Date : ' . $date . '</h5>
                    </div>
                </div>
            </div>
                    ';
                        }
                    } else {
                        echo '<h2 class=text-info>No Appointments Booked Till Now</h2>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>
</body>

</html>