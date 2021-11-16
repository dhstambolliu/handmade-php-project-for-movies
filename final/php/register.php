<?php
require_once "config.php";

$name = $surname = $email = $password = $confirm_password = $birthday = "";
$name_err = $surname_err = $email_err = $password_err = $confirm_password_err = $birthday_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["name"]))){
        $name_err = "Insert name.";
    } else{
        
        $sql = "SELECT id FROM users WHERE name = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_name);
            $param_name = trim($_POST["name"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            } else{
                echo "Something wrong happend, try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    if(empty(trim($_POST["surname"]))){
        $surname_err = "Insert surname.";
    } else{
        $sql = "SELECT id FROM users WHERE surname = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_surname);
            
            $param_surname = trim($_POST["surname"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            } else{
                echo "Something wrong happend, try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
        if(empty(trim($_POST["email"]))){
        $email_err = "Insert email.";
    } else{
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This user is registered.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Something wrong happend, try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Insert Password.";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must be 8 or more characters long.";
    } elseif(!preg_match("/[A-Z]/", $_POST["password"])){
        $password_err = "Password must contain an upper letter";
    } elseif(!preg_match("@[0-9]@", $_POST["password"])){
        $password_err = "Password must contain a number";
    } elseif(!preg_match("@[^\w]@", $_POST["password"])){
        $password_err = "Password must contain a character";
    } 
    else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password don't match.";
        }
    }

    if(empty(trim($_POST["birthday"]))){
        $birthday_err = "Insert birthday.";
    } else{
        $sql = "SELECT id FROM users WHERE birthday = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_birthday);
            
            $param_birthday = trim($_POST["birthday"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            } else{
                echo "Something wrong happend, try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }

    if(empty($name_err) && empty($surname_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($birthday_err)){
        
        $sql = "INSERT INTO users (name, surname, email, password, birthday) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_surname, $param_email, $param_password, $param_birthday);

            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
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
        <title>Movies Online Register</title>
        <link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="hero">
            <div class="from-box1">
                <div class="button-box">
                   <button type="button" class="toggle-btn" onclick="login()"><a href="login.php" class="button"><b>Log in</b></a> </button>
                    <button type="button" class="toggle-btn" onclick="register()"><b>Register</b></button>
                </div>


<form id="login" class="input-group" method="POST">

    <b>Name: </b><span class="fadeIn"><?php echo $name_err; ?></span><br/><input type="text" class="input-field" placeholder="Insert name" name="name"><br/>
    <b>Surname: </b><span class="fadeIn"><?php echo $surname_err; ?></span><br/><input type="text" class="input-field" placeholder="Insert surname" name="surname" ><br/>
    <b>Email: </b><span class="fadeIn"><?php echo $email_err; ?></span><br/><input type="email" class="input-field" placeholder="Insert email" name="email" ><br/>
    <b>Password: </b><span class="fadeIn"><?php echo $password_err; ?></span><br/><input type="password" class="input-field" placeholder="Insert password" name="password" ><br/>
    <b>Confirm Password: </b><span class="fadeIn"><?php echo $confirm_password_err; ?></span><br/><input type="password" class="input-field" placeholder="Confirm password" name="confirm_password"><br/>
    <b>Birthday: </b><span class="fadeIn"><?php echo $birthday_err; ?></span><br/><input type="date" class="input-field" placeholder="Insert birthday" name="birthday"><br/>
    <button type="submit" class="submit-btn" name="register_user"><b>Register <i style="font-size: 16px" class="fa fa-user-plus"></i></b></button>
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
</html>