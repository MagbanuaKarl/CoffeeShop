<!DOCTYPE html>
<html lang="en">


<head>
    <title>SKC USER</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .addform
        {
            width: 350px;
            height: 550px;
            background: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 35%;
            left: 17.5%;
            transform: translate(0%, -5%);
            border-radius: 10px;
            padding: 25px;
        }

        .addform h2 
        {
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

        .addform .input 
        {
            width: 340px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #ff7200;
            border-top: none;
            border-right: none;
            border-left: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
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
            <h1>USER<span>TABLE</span>Coffee Shop</h1>
        </div>

            <div class="addform">
                <form method="post" action="create.php">
                    <table>
                        <tr>
                            <td><input placeholder="Equipment ID" class="input" type="text" name="equipmentID"></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Equipment" class="input" type="text" name="equipment"></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Number of Equipment" class="input" type="text" name="numEquipment"></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Cost" class="input" type="text" name="cost"></td>
                        </tr>
                        <tr>
                            <td><input placeholder="" class="btnn" type="submit" name="submit" value="Add Record"></td>
                        </tr>
                        <tr>
                            <td><input class="btnn" type="reset" name="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
    </div>

</body>

</html>