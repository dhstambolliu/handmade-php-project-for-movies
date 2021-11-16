<?php

session_start();
include "../php/config.php";
if(!$connect){
    echo "Error on Database".mysqli_connect_errno($connect);
}

$query = "SELECT * from movies";
//echo $query;
$query_result = mysqli_query($connect,$query);
if(!$query_result){
    echo "Error".mysqli_error();
}
$array_user = array();

while($row = mysqli_fetch_array($query_result)){
    $array_user[$row['id']]['id'] = $row['id'];
    $array_user[$row['id']]['image'] = $row['image'];
    $array_user[$row['id']]['image_text'] = $row['image_text'];
    $array_user[$row['id']]['link'] = $row['link'];
    $array_user[$row['id']]['info'] = $row['info'];
    $array_user[$row['id']]['video'] = $row['video'];
    $array_user[$row['id']]['genre'] = $row['genre'];
    $array_user[$row['id']]['IMBd'] = $row['IMBd'];
    $array_user[$row['id']]['year'] = $row['year'];
}
//echo "<pre>";
//print_r($array_user);
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
    <title>Admin Page</title>
      <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Deshironi te fshini filmin?');
}
</script>
      
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
                  <li class="nav-item"><a href="view_movies.php" class="nav-link text-white p-3 mb-2 btnnn  active"><i class="fa fa-eye"></i> View movies</a></li>
                <li class="nav-item"><a href="modify.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-wrench"></i> Modify</a></li>
                <li class="nav-item"><a href="/project/final/php/logout.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
              </ul>
            </div>   
            <div class="table1">
            <p style="text-align: center">Movies</p>
                </div><br><br>
  <table class="header-fixed" border="1px" style="border: 1px solid #1abc9c; text-align: center">
    <thead>
      <tr style="background: #1abc9c; color: white">
        <th>ID</th>
        <th>Poster</th>
        <th>Title</th>
        <th>Trailer Link</th>
        <th>Info</th>
        <th>Video Mp4</th>
        <th>Genre</th>
        <th>IMBd</th>
        <th>Year</th>
        <th>Edit</th>
        <th>Delete</th>
        <!--  <th>Edit</th> -->
      </tr>
    </thead>
    <?php 
      foreach ($array_user as $value){ ?>
    <tbody style="font-size: 12px">
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['image']; ?></td>
        <td><?php echo $value['image_text']; ?></td>
        <td><?php echo $value['link']; ?></td>
        <td><?php echo $value['info']; ?></td>
        <td><?php echo $value['video']; ?></td>
        <td><?php echo $value['genre']; ?></td>
        <td><?php echo $value['IMBd']; ?></td>
        <td><?php echo $value['year']; ?></td>
        <td><button style="background: #1abc9c"><a style="text-decoration: none; color: white" href='update_movies.php?id=<?php echo $value['id'];?>'>Edit</a></button></td>
        <td><button style="background: #1abc9c"><a style="text-decoration: none; color: white" onclick="return checkDelete()" href='delete_movies.php?id=<?php echo $value['id'];?>'>Delete</a></button></td>
    </tbody>
     <?php } ?>
  </table>
</div>
        </div>
    </nav>
</body>
</html>
