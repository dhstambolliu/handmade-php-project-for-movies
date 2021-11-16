<?php

session_start();

include 'config.php';
if(!$connect){
    echo "Error on Database".mysqli_connect_errno($connect);
}
$id_row=$_SESSION['id'];
$query = "SELECT * from users WHERE id='{$_SESSION['id']}'";
//echo $query;
$query_result = mysqli_query($connect,$query);
if(!$query_result){
    echo "Error".mysqli_error();
}
$array_user = array();

while($row = mysqli_fetch_array($query_result)){
    $array_user[$row['email']]['name'] = $row['name'];
    $array_user[$row['email']]['surname'] = $row['surname'];
    $array_user[$row['email']]['email'] = $row['email'];
    $array_user[$row['email']]['birthday'] = $row['birthday'];
}
if(isset($_POST["update"])){
    include 'config.php';

    $name = mysqli_real_escape_string($connect,$_POST["name"]);
    $surname = mysqli_real_escape_string($connect,$_POST["surname"]);
    $email = mysqli_real_escape_string($connect,$_POST["email"]);
    $birthday = mysqli_real_escape_string($connect,$_POST["birthday"]);

    
    $query_update = "UPDATE users SET name='".$name."',surname='".$surname."', birthday='".$birthday."',   WHERE id=".$id_row;
    $query_update_result = mysqli_query($connect,$query_update);
    if(!$query_update_result){
        echo "Error".mysqli_error();
    }else{
        header("Location:profile.php");
    }
    mysqli_close($conn);
    
} 
?>

<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../admin/bootstrap.min.css" type="text/css">
    <script defer src="../admin/all.js" type="text/javascript"></script>
      <script src="../admin/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../admin/popper.min.js" type="text/javascript"></script>
    <script src="../admin/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/profile.css">
<script>
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btnnn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
      <style>
      .btnnn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: inherit;
  cursor: pointer;
  font-size: 18px;
  border-radius: 5px;
}

.active, .btnnn:hover {
  background-color: #666;
  color: white;
}
body{ font: 14px sans-serif; }
.wrapper{ width: 350px; padding: 20px; }
</style>
  </head>
<body>
    
    <nav class="navbar navbar-expand-md">
      <div class="navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="col-xl-2 sidebar fixed-top" id="myDIV">
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="index.php" class="nav-link text-white p-3 mb-2 btnnn "><i class="fas fa-arrow-left"></i> Back</a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link text-white p-3 mb-2 btnnn active"><i class="fas fa-user"></i> Edit profile</a></li>
                <li class="nav-item"><a href="change_password.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-lock"></i> Change Password</a></li>
                <li class="nav-item"><a href="/projekt/finali/php/logout.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul>
            </div>
            <div class="table1">
            <p style="text-align: center">Edit Profile</p>
                </div>
            <br>
            <?php
      foreach ($array_user as $value){ ?>

<div class="container" >
  <center>
    <div class="upload_movies_form">
    <div class="form-style-5">
        <h2>Fill in the form to update your info.</h2>
        <br>
        <form action="profile.php" method="post">
        <fieldset><legend><span class="number">Name: </span><span style="color: red">*</span></legend>
        <input type="text" name="name" value="<?php echo $value['name']; ?>" required>
        <legend><span class="number">Surname: </span><span style="color: red">*</span></legend>
        <input type="text" name="surname" value="<?php echo $value['surname']; ?>" required>
        <legend><span class="number">Email: </span><span style="color: red">*</span></legend>
        <input type="text" value="<?php echo $value['email']; ?>" readonly>
        <legend><span class="number">Birthday: </span><span style="color: red">*</span></legend>
        <input type="date" name="birthday" value="<?php echo $value['birthday']; ?>" required>
        <input type="submit" name="update" value="Update">
            </fieldset>
        </form>
    </div>
      </div>
        </center>
</div>
<?php } ?>
          </div>
        </div>
      </nav>
</body>
</html>


