<?php
include '../config/connect.php';
$name = $_GET['patientname'];
$sql = "select * from patient where name='$name'";
$result = mysqli_query($con, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];


    // insert query
    $sql = "insert into `appointment` (name,email,date,doctor) values ('$name','$email','$date','$doctor')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:patientdashboard.php');
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
    <title>Book Appointment</title>
    <style>
        .form-group {
            padding: 4px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center my-5">Book Appointment <i class="fa-solid fa-calendar-check"></i></h2>

        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                    autocomplete="off" value="<?php echo $row['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"
                    autocomplete="off" value="<?php echo $row['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="date">Appointment Date</label>
                <input type="date" class="form-control" id="date" placeholder="Enter appointment date" name="date"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="doctor">Doctor</label>
                <input type="text" class="form-control" id="doctor" placeholder="Doctor name" name="doctor"
                    autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary my-5 book" name="submit" onclick="" id="submitBtn">Book
                Appointment</button>
            <a href="patientdashboard.php" class="btn btn-primary">Go Back</a>
        </form>
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