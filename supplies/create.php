<?php 
include '../dbconnect.php';

$equipmentID = $_POST['equipmentID'];
$equipment = $_POST['equipment'];
$numEquipment = $_POST['numEquipment'];
$cost = $_POST['cost'];

$query = mysqli_query($connect, "INSERT INTO supplies(EQUIPMENT_ID, EQUIPMENT, NUM_EQUIPMENT, COST) VALUES('$equipmentID','$equipment', '$numEquipment', '$cost') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='supplies.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }
