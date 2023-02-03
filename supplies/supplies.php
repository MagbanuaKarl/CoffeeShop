<!DOCTYPE html>
<html lang="en">

<head>
    <title>SKC SUPPLIES</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .crud {
            width: 350px;
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 50%;
            left: 63%;
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
    </style>
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SKC SUPPLIES</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="../home.php">HOME</a></li>
                    <li><a href="../user/user.php">EMPLOYEES</a></li>
                    <li><a href="../menu/menu.php">MENU</a></li>
                    <li><a href="supplies.php">SUPPLIES</a></li>
                    <li><a href="../contact.php">CONTACT</a></li>
                </ul>
            </div>


        </div>
        <div class="content">
            <h1>SUPPLIES<span>TABLE</span>Coffee Shop</h1>
            <br>
            <br>
            <br>
            <div class="tbl">

                <table border="1">
                    <tr>
                        <th>Equipment ID</th>
                        <th>Equipments </th>
                        <th>Number of Equipments </th>
                        <th>Cost</th>

                        <th>Action</th>
                    </tr>
                    <?php
                    include '../dbconnect.php';
                    $query = mysqli_query($connect, "SELECT * from supplies");
                    $ctr = 1;
                    $row = mysqli_num_rows($query);
                    if ($row > 0) {
                        while ($row = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td><?php echo $row['EQUIPMENT_ID']; ?> </td>
                                <td><?php echo $row['EQUIPMENT']; ?> </td>
                                <td><?php echo $row['NUM_EQUIPMENT']; ?> </td>
                                <td><?php echo $row['COST']; ?> </td>

                                <td>
                                    <a href="edit.php?editid=<?php echo htmlentities($row['EQUIPMENT_ID']);?>">Edit</a>
                                    <a href="delete.php?delid=<?php echo htmlentities($row['EQUIPMENT_ID']);?>" onclick="return confirm('Do you really want to Delete?')">Delete</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>


            <div class="crud">
                <h2><a href="add.php">Add New Record</a></h2>
                <table border="1">
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>