<?php
include '../config/connect.php';
session_start();
if (!isset($_SESSION['name'])) {
    header('locaton:../LogSign/doctorlogin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://wallpaperaccess.com/full/5301521.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-blend-mode: lighten;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            flex: 0 0 200px;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar li {
            padding: 10px 20px;
            cursor: pointer;
        }

        .sidebar li:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content h1 {
            margin-top: 0;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                flex: 0 0 auto;
                width: 100%;
            }
        }

        a {
            text-decoration: none;
        }

        .text {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <?php
                    // echo "Hello, ";
                    $name = $_SESSION['name'];
                    echo $name;
                    ?>
                </li>
                <a href="displayprofile.php" class="text">
                    <li id="home">View Profile</li>
                </a>
                <a href="viewappointment.php" class="text">
                    <li id="book-appointment">View Appointment</li>
                </a>
                <a href="logout.php" class="text">
                    <li id="logout">Logout <i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to Doctor Dashboard <i class="fa-solid fa-user-doctor"></i></h1>
            <!-- Your content goes here -->
        </div>
    </div>
    <script src="https://kit.fontawesome.com/eb93dfa716.js" crossorigin="anonymous"></script>
</body>

</html>