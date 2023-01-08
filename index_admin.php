<?php
session_start();
if (!isset($_SESSION['fname'])) {
    echo "<script>alert('คุณยังไม่ได้ Login');</script>";
    header("location:fr_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <style>
        .font {
            font-family: "Mali", cursive;
        }
    </style>
</head>

<body class="font">
    <div class="container">
        <div class="alert alert-danger text-center h2 text-danger mt-3" role="alert">
            Welcome to Admin
        </div>
        <h2>Admin</h2>
        <p>ยินดีต้อนรับคุณ : <span style="color: blue"><?= $_SESSION['fname']; ?> </span></p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>