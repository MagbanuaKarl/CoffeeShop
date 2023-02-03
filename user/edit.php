<?php
include '../dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM workers WHERE USER_NAME='$eid'");
while ($row = mysqli_fetch_array($query)) {
?>
<!-------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
    

<head>
    <title>EMPLOYEES EDIT</title>
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
                <h2 class="logo">SKC EMPLOYEES</h2>
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
            <h1>EMPLOYEES  <span>TABLE</span>  EDIT</h1>
            <br>
            <br>
            <br>
            <div class="crud">
                <form method="post">
                    <table>
                        <tr>
                            <td>UserID: </td>
                            <td><input class="input" type="text" name="userID" value="<?php  echo $row['USER_ID'];?>"></td> 
                        </tr>

                        <tr>
                            <td>Username: </td>
                            <td><input class="input" type="text" name="userName" value="<?php  echo $row['USER_NAME'];?>"></td>
                        </tr>

                        <tr>
                            <td>First Name:</td>
                            <td><input class="input" type="text" name="fName" value="<?php  echo $row['FIRST_NAME'];?>"></td>
                        </tr>
                        

                        <tr>
                            <td>Last Name:</td>
                            <td><input class="input" type="text" name="lName" value="<?php  echo $row['LAST_NAME'];?>"></td>
                        </tr>
 

                        <tr>
                            <td>Type:</td>
                            <td><select class="input" name="type">
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Baker">Baker</option>
                            <option value="Barista">Barista</option>
                        </select></td>
                        </tr>
                    </table>
                        <br>
                            <button class="btnn" type="submit" name="submit" value="Update Record">Update Record</button>        
                </form>
                
                
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
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $userName = $_POST['userName'];
    $userID = $_POST['userID'];
    $tpye = $_POST['type'];

    $update=mysqli_query($connect, "UPDATE  workers SET FIRST_NAME='$fname',LAST_NAME='$lname', USER_NAME='$userName  ', USER_ID='$userID', type='$tpye' WHERE USER_NAME='$eid'");
     
    if ($update) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='user.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>