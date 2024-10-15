<?php
include '../config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patient Booking</title>
    <style>
    </style>
</head>

<body>
    <div class="container my-5">
    <a href="patientdashboard.php" class="text-light text-decoration-none w-100"><button
    class="btn btn-info my-3 w-100">Go Back</button></a>
        <h1 class="text-center mb-3">Available Doctors <i class="fa-solid fa-user-doctor"></i></h1>
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php
                $sql = "select * from `doctor`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $specialization = $row['specialization'];
                        $fee = $row['fee'];
                        echo
                            '
                    <div class="col">
                <div class="card">
                    <img src="../images/doctor.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Name : ' . $name . '</h5>
                        <h5 class="card-title">Email : ' . $email . '</h5>
                        <h5 class="card-title">Specialization : ' . $specialization . '</h5>
                        <h5 class="card-title">Fees : <i class="fa-solid fa-indian-rupee-sign"></i> ' . $fee . '.0</h5>
                        
                    </div>
                </div>
            </div>
                    ';
                    }
                }
                ?>
            </div>
        </div>

    </div>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>