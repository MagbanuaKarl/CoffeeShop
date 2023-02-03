<?php
include '../dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM menu WHERE MENU_ID='$eid'");
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
            width: 370px;
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
        select
        {
            background: transparent;
        }
        select option
        {
            background-color: rgba(0, 0, 0, 0.4);
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
                    <li><a href="../user/user.php">USER</a></li>
                    <li><a href="menu.php">MENU</a></li>
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
                        <td>Menu ID: </td>
                        <td><input class="input" type="text" name="menuID" value="<?php  echo $row['MENU_ID'];?>"> </td>
                    </tr>
                    
                    <tr>
                        <td>Name : </td>
                        <td><input class="input" type="text" name="name" value="<?php  echo $row['NAME'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Price : </td>
                        <td><input class="input" type="text" name="price" value="<?php  echo $row['PRICE'];?>"></td>
                    </tr>
                    <tr>
                        <td>Classification: </td>
                        <td><select class="input" name="classification">
                            <option value="Bread">Bread</option>
                            <option value="Cold Drink">Cold Drink</option>
                            <option value="Hot Drink">Hot Drink</option>
                            <option value="Merchandise">Merchandise</option>
                        </select></td>
                    </tr>
                </table>
                    <br>

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
    $menuID = $_POST['menuID'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $classification = $_POST['classification'];

    $update=mysqli_query($connect, "UPDATE  menu SET MENU_ID='$menuID', NAME='$name',PRICE ='$price', CLASSIFICATION='$classification' WHERE MENU_ID='$eid'");
     
    if ($update) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='menu.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>