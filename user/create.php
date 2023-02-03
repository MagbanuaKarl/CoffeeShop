<?php 
include '../dbconnect.php';

$userId = $_POST['userId'];
$userName = $_POST['userName'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$type = $_POST['type'];

$query = mysqli_query($connect, "INSERT INTO workers(USER_ID, USER_NAME, FIRST_NAME, LAST_NAME, TYPE) VALUES('$userId', '$userName', '$fName', '$lName', '$type') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='user.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

 ?>
