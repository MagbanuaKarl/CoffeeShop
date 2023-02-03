<?php
include '../dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM supplies WHERE EQUIPMENT_ID='$eid'");
while ($row = mysqli_fetch_array($query)) {
?>
<!-------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
    

<head>
    <title>USER EDIT</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .crud {
            width: 400px;
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 80%;
            left: 2%;
            transform: translate(0%, -5%);
            border-radius: 10px;
            padding: 25px;
            }           

        .crud h2 {
            width: 320px;
            font-family: sans-serif;
            text-align: center;
            color: #ff7200;
            font-size: 22px;
            background-color: #fff;
            border-radius: 10px;
            margin: 2px;
            padding: 8px;
         }
         .crud .input {
            width: 250px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #ff7200;
            border-top: none;
            border-right: none;
            border-left: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 5px;
            font-family: sans-serif;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SKC USER</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="../home.php">HOME</a></li>
                    <li><a href="user.php">USER</a></li>
                    <li><a href="../menu/menu.php">MENU</a></li>
                    <li><a href="../supplies/supplies.php">SUPPLIES</a></li>
                    <li><a href="../contact.php">CONTACT</a></li>
                </ul>
            </div>

            
        </div>
        <div class="content">
            <h1>USER  <span>TABLE</span>  EDIT</h1>
            <br>
            <br>
            <br>
            <div class="crud">
                <form method="post">
                <table>
                    <tr>
                        <td>Equipment ID: </td>
                        <td><input class="input" type="text" name="equipmentID" value="<?php  echo $row['EQUIPMENT_ID'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Equipment : </td>
                        <td><input class="input" type="text" name="equipment" value="<?php  echo $row['EQUIPMENT'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Number of Equipment: </td>
                        <td><input class="input" type="text" name="numEquipment" value="<?php  echo $row['NUM_EQUIPMENT'];?>"></td>
                    </tr>
                    <tr>
                        <td>Cost: </td>
                        <td><input class="input" type="text" name="cost" value="<?php  echo $row['COST'];?>"></td>
                    </tr> 
                </table>
                <button class="btnn" type="submit" name="submit" value="Update Record">Update Record</a></button>
</form>
                
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>

<?php
}
if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    //Getting Post Values
    $equipmentid = $_POST['equipmentID'];
    $equipment = $_POST['equipment'];
    $numEquipment = $_POST['numEquipment'];
    $cost = $_POST['cost'];

    $update=mysqli_query($connect, "UPDATE  supplies SET EQUIPMENT_ID='$equipmentid',EQUIPMENT='$equipment',NUM_EQUIPMENT='$numEquipment', COST='$cost' WHERE EQUIPMENT_ID='$eid'");
     
    if ($update) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='supplies.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>