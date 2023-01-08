<?php

$conn = mysqli_connect("localhost","root","","db_member");

!$conn ? die("Failed to connect to database " . mysqli_connect_error($conn)) : print("Connection successfully!!!") ;

mysqli_set_charset($conn,'utf8');
