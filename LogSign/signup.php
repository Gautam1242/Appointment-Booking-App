<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            background-image: url("https://wallpaperaccess.com/full/5301521.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            background-color: lightblue;
            box-shadow: 0px 30px 40px rgba(0, 0, 0, 0.9);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <div class="form-group">
                <a href="doctorsign.php" class="btn btn-dark">For Doctors</a>
            </div>
            <div class="form-group">
                <a href="patientsign.php" class="btn btn-dark">For Patients</a>
            </div>
            <hr>
            <p>Already Registered ? <a href="login.php" class="btn btn-dark">Login </a></p>
            <p><a href="../LandingPage/index.php">Go to Landing Page</a></p>
        </form>
    </div>
</body>

</html>