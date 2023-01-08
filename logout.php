<?php
session_start();
session_destroy(); //clear session all
header("location:login.php");
