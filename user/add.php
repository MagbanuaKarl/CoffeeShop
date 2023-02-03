<!DOCTYPE html>
<html lang="en">


<head>
    <title>SKC USER</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .addform
        {
            width: 350px;
            height: 470px;
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
            width: 240px;
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
                        <input placeholder="User ID" class="input" type="text" name="userId"></td>

                        <td><input placeholder="Username" class="input" type="text" name="userName"></td>

                        <td><input placeholder="First Name" class="input" type="text" name="fName"></td>

                        <td><input placeholder="Last Name" class="input" type="text" name="lName"></td>

                        <td><select class="input" name="type">
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                            <option value="Baker">Baker</option>
                            <option value="Barista">Barista</option>
                        </select></td>
                        
                        <td><input type="submit" class="btnn" name="submit" value="Add Record"></td>
                        <td><input type="reset" class="btnn" name="reset"></td>
            </form>
            </div>
        
        
    </div>

</body>

</html>