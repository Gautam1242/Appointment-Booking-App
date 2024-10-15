<?php
include '../config/connect.php';
$id = $_GET['updateid'];
$sql = "select * from `appointment` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$date = $row['date'];
$operation = $row['operation'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $operation = $_POST['operation'];

    // insert query
    $sql = "update `appointment` set operation='$operation' where id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "DATA UPDATED SUCCESSSFULLY";
        header('location:viewappointment.php');
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
    <title>Update Appointment Status</title>
    <style>
        .form-group {
            padding: 4px;
        }
        
    </style>
</head>

<body>
    <div class="container my-5 p-3">
        <h2 class="text-center">Update Appointment Status</h2>
        <div class="container my-5 p-3">
            <form method="post">
                <div class="form-group">
                    <label for="name">Patient Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" disabled
                        autocomplete="off" value=<?php echo $name ?>>
                </div>
                <div class="form-group">
                    <label for="date">Appointment Date</label>
                    <input type="date" class="form-control" id="date" placeholder="Date" name="date" disabled
                        autocomplete="off" value=<?php echo $date ?>>
                </div>
                <div class="form-group">
                    <label for="operation">Appointment Status (Accept/Reject)</label>
                    <input type="text" class="form-control" id="operation"
                        placeholder="Status (Accept/Reject Appointment)" name="operation" autocomplete="off" value=<?php echo $operation ?>>
                </div>
                <button type="submit" class="btn btn-primary my-5" name="submit">Update Appointment Status</button>
            </form>
        </div>
    </div>
</body>

</html>