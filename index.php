<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

require_once "dbconnect.php";
 
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err))
    {
        $sql = "SELECT USER_ID, USER_NAME, PASSWORD FROM user WHERE USER_NAME = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
                {                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password))
                        {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: home.php");

                        } 
                        else
                        {
                            $login_err = "Invalid username or password.";
                        }
                    }} 
                    else
                {
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }}
    mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SKC COFSHOP</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Sherwin</a></li>
                    <li><a href="#">Carl</a></li>
                    <li><a href="#">Karl</a></li>
                    <li><a href="#">CoffeeShop</a></li>
                </ul>
            </div>  
            </div>
            <div class="form">
                <h2>Log In</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <input placeholder="Enter Name here" type="username" name="username" class="input <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div>

                <input placeholder="Enter Password here" type="password" name="password" class="input <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">

                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div >
                <button type="submit" class="btnn" value="Login">Login</button>
            </div>
            <br>
            <h2><a href="../CoffeeShop/account/register.php">Sign up now</a>.</h2>
        </form>
        </div>
    </div>
</body>
</html>

