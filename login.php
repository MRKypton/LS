<?php
include 'conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// ใช้เข้ารหัส password ด้วย sha512
$password_hash = hash('sha512',$password);

$sql = "SELECT * FROM member WHERE username='$username' AND password='$password_hash'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$status = $row['status']; //เก็บค่า status


if($row>0){
    $_SESSION["user"]=$row['username'];
    $_SESSION["pass"]=$row['passsword'];
    $_SESSION["userid"]=$row['id'];
    $_SESSION["fname"]=$row['name'];
    $_SESSION["lname"]=$row['lastname'];
    // check status
    if ($status == '0') {
        $show = header("location:index_user.php");
    } elseif ($status == '1') {
        $show = header("location:index_admin.php");
    }
    // $show = header("location:index.php");
} else {
    $_SESSION["Error"] = "<p>Please enter your Username and Password</p>";
    $show = header("location:fr_login.php");

}
echo $show;
