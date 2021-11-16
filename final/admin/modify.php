<?php

session_start();

include "../php/config.php";
if(!$connect){
    echo "Error on Database".mysqli_connect_errno($connect);
}

$query = "SELECT * from users";
//echo $query;
$query_result = mysqli_query($connect,$query);
if(!$query_result){
    echo "Error".mysqli_error();
}
$array_user = array();

while($row = mysqli_fetch_array($query_result)){
    $array_user[$row['email']]['id'] = $row['id'];
    $array_user[$row['email']]['name'] = $row['name'];
    $array_user[$row['email']]['id'] = $row['id'];
    $array_user[$row['email']]['surname'] = $row['surname'];
    $array_user[$row['email']]['email'] = $row['email'];
    $array_user[$row['email']]['birthday'] = $row['birthday'];
    $array_user[$row['email']]['role'] = $row['role'];
}

mysqli_close($connect);
?>

<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /project/final/php/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <script defer src="all.js" type="text/javascript"></script>
      <script src="jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="popper.min.js" type="text/javascript"></script>
    <script src="bootstrap.min.js" type="text/javascript"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="admin_style.css">
      <link rel="stylesheet" href="modifiko.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="inbox.css">
    <title>Admin Page</title>
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
    </style>
  </head>
<body>
    
    <nav class="navbar navbar-expand-md">
      <div class="navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="col-xl-2 sidebar fixed-top" id="myDIV">
              <a href="../php/index.php" class="navbar-brand text-white d-block mx-auto text-center bottom-border">Administrator</a>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="user_profile.php" class="nav-link text-white p-3 mb-2 btnnn "><i class="fas fa-user"></i> Profile</a></li>
                <li class="nav-item"><a href="inbox.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-envelope"></i> Inbox</a></li>
                  <li class="nav-item"><a href="upload_movies.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fa fa-upload"></i> Upload movies</a></li>
                  <li class="nav-item"><a href="view_movies.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fa fa-eye"></i> View movies</a></li>
                <li class="nav-item"><a href="modifiko.php" class="nav-link text-white p-3 mb-2 btnnn active"><i class="fas fa-wrench"></i> Modify</a></li>
                <li class="nav-item"><a href="/project/final/php/logout.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul>
            </div>    
     <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Do you want to delete the user?');
}
</script>
            <div class="table1">
            <p style="text-align: center">Modify Users</p>
                </div>
            <br>
<div class="container">
  <table class="table2">
    <thead>
      <tr>
        <th class="form-style-5">Nr</th>
        <th class="form-style-5">Name</th>
        <th class="form-style-5">Surname</th>
        <th class="form-style-5">Email</th>
        <th class="form-style-5">Birthday</th> 
        <th class="form-style-5">Role</th>       
        <th class="form-style-5">Edit</th>       
        <th class="form-style-5">Delete</th>       
      </tr>
    </thead>
      <?php
      
          $nr = 1;
      foreach ($array_user as $value){ ?>
        <tbody>
        <td><?php echo $nr; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['surname']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><?php echo $value['birthday']; ?></td>
        <td><?php echo $value['role']; ?></td>
        <td><button style="background: #1abc9c"><a style="text-decoration: none; color: white" href='update.php?id=<?php echo $value['id'];?>'>Edit</a></button></td>
        <td><button style="background: #1abc9c"><a style="text-decoration: none; color: white" onclick="return checkDelete()" href='delete_user.php?id=<?php echo $value['id'];?>'>Delete</a></button></td>
           </tbody>
      <?php $nr++;} ?>
  </table>
</div>
            </div>
          </div>
      </nav>

</body>
</html>
