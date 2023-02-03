<?php 
include '../dbconnect.php';

$menu_Id = $_POST['menuID'];
$name = $_POST['name'];
$price = $_POST['price'];
$classification = $_POST['classification'];

$query = mysqli_query($connect, "INSERT INTO menu(MENU_ID, NAME, PRICE, CLASSIFICATION) VALUES('$menu_Id','$name', '$price', '$classification') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='menu.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }