
<?php

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
  header("location: index.php");
  exit;
}

require_once "config.php";
 
$email = $password = "";
$email_err = $password_err = "";

 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err = "Insert email.";
    } else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Insert password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($email_err) && empty($password_err)){

        $sql = "SELECT id, email, password, role FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
  
            $param_email = $email;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){                    

                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password,$role);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            //session_start();
                            if($role == 1){
                                
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            header("location: ../admin/user_profile.php");
                                
                            }else if ($role == 0){
                                
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            header("location: index.php");
                            }
                        } else{
                            $password_err = "Wrong password.";
                        }
                    }
                } else{
                    $email_err = "User not found.";
                }
            } else{
                echo "Something wrong happend, try again later.";
            }
        }
        
        mysqli_stmt_close($stmt);
    }

    mysqli_close($connect);
}
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Movies Online Login</title>
        <link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="hero">
            <div class="from-box">
                <div class="button-box">
                   <button type="button" class="toggle-btn" onclick="login()"><b>Log in</b></button>
                    <button type="button" class="toggle-btn" onclick="register()"><a href="register.php" class="button"><b>Register</b></a></button>
                </div>
            <form id="login" class="input-group" method="POST">
                <b>Email: </b><span class="fadeIn"><?php echo $email_err; ?></span><br/>
                <input type="email" name="email" class="input-field" placeholder="Email">
                <b>Password: </b><span class="fadeIn"><?php echo $password_err; ?></span><br/>
                <input type="password" name="password"  class="input-field" placeholder="Enter Password"/>
                <div class="button-bo">
                <button type="submit" class="submit-btn" name = "login_user"><i style="font-size: 17px" class="fa fa-sign-in"></i> <b>Log In</b></button><br>
                <button type="button" class="submit-btn3" name="reset-password" onclick="window.location.href='http://localhost/project/final/resetpassword/forgotPassword.php'"><span class="fa-passwd-reset fa-stack">
  <i style="color: darkorange" class="fa fa-undo fa-stack-2x"></i>
  <i class="fa fa-lock fa-stack-1x"></i>
</span> <b>Reset Password</b></button><br>
                </div>
            </form>
        </div>
        </div>
        <script>

            function register()
            {
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login()
            {
                x.style.left = "50px";
                y.style.left = "400px";
                z.style.left = "0px";
            }
        </script>
    </body>





















