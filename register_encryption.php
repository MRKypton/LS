<?php
include 'condb.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
// เข้ารหัส password
$password_hash = hash('sha512', $password);

$sql = "INSERT INTO member(name,lastname,telephone,username,password,status) VALUES ('$fname','$lname','$phone','$username','$password_hash','0')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    header("location:fr_login.php");
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);
