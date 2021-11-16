<?php 
include '../php/config.php';
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../php/login.php");
    exit;
}

if($_REQUEST["id"]){
    $id_row = $_GET["id"];
    
    $query_select = "SELECT * FROM users WHERE id=".$id_row;
    $query_select_result = mysqli_query($connect,$query_select);
    if(!$query_select_result){
        echo "Error",mysqli_error();
    }
    $row = mysqli_fetch_array($query_select_result);
    mysqli_close($connect);
}

if(isset($_POST["modify"])){
    include '../php/config.php';

    $name = mysqli_real_escape_string($connect,$_POST["name"]);
    $surname = mysqli_real_escape_string($connect,$_POST["surname"]);
    $email = mysqli_real_escape_string($connect,$_POST["email"]);
    $birthday = mysqli_real_escape_string($connect,$_POST["birthday"]);
    $role = mysqli_real_escape_string($connect,$_POST["role"]);

    
    $query_update = "UPDATE users SET name='".$name."',surname='".$surname."',email='".$email."' ,birthday='".$birthday."',role='".$role."' WHERE id=".$id_row;
    $query_update_result = mysqli_query($connect,$query_update);
    if(!$query_update_result){
        echo "Error".mysqli_error();
    }else{
        header("Location:modify.php");
    }
    mysqli_close($connect);
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>
<div class="upload_movies_form">
    <div class="form-style-5">
            <h2 style="text-align: center"><b>Modify users</b></h2>

            <form method="POST">
                <fieldset>
            <legend><span class="number">Name: </span></legend>
                    <input type="text" class="input-field" name="name" value="<?php echo $row['name']; ?>">
            <legend><span class="number">Surname: </span></legend>
                    <input type="text" class="input-field" name="surname" value="<?php echo $row['surname']; ?>">
            <legend><span class="number">Email: </span></legend>
                    <input type="email" class="input-field" name="email" value="<?php echo $row['email']; ?>">
            <legend><span class="number">Birthday: </span></legend>
                    <input type="date" class="input-field" name="birthday" value="<?php echo $row['birthday']; ?>">
            <legend><span class="number">Role: </span></legend>
                    <input type="number" class="input-field" name="role" value="<?php echo $row['role']; ?>"><br>
                    </fieldset>
            <input type="submit" class="button-box" name="modify" value="Update">
                
            </form>
        </div>
    </div>
</body>
</html>                            
