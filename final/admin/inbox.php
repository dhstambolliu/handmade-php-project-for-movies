<?php
   session_start();
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: ../php/login.php");
       exit;
   }
   
   include '../php/config.php';
   if(!$connect){
       echo "Error on Database".mysqli_connect_errno($connect);
   }
   
   $query = "SELECT * FROM contact ORDER BY id DESC";
   $query_result = mysqli_query($connect,$query);
   if(!$query_result){
       echo "Error".mysqli_error();
   }
   $array_user = array();
   
   while($row = mysqli_fetch_array($query_result)){
       $array_user[$row['email']]['name'] = $row['name'];
       $array_user[$row['email']]['surname'] = $row['surname'];
       $array_user[$row['email']]['email'] = $row['email'];
       $array_user[$row['email']]['phone'] = $row['phone'];
       $array_user[$row['email']]['subject'] = $row['subject'];
      
   }
   
   mysqli_close($connect);
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
                     <li class="nav-item"><a href="inbox.php" class="nav-link text-white p-3 mb-2 btnnn active"><i class="fas fa-envelope"></i> Inbox</a></li>
                     <li class="nav-item"><a href="upload_movies.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fa fa-upload"></i> Upload movies</a></li>
                     <li class="nav-item"><a href="view_movies.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fa fa-eye"></i> View movies</a></li>
                     <li class="nav-item"><a href="modify.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-wrench"></i> Modify</a></li>
                     <li class="nav-item"><a href="/project/final/php/logout.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
               </div>
               <div class="table1">
                  <p style="text-align: center">Contact Form</p>
               </div>
               <br>
               <div class="container" >
                  <table class="table3" style="center">
                     <thead>
                        <tr>
                           <th class="form-style-5">Name</th>
                           <th class="form-style-5">Surname</th>
                           <th class="form-style-5">Email</th>
                           <th class="form-style-5">Phone</th>
                           <th class="form-style-5" style="width:50px">Subject</th>
                        </tr>
                     </thead>
                     <?php 
                        foreach ($array_user as $value){ ?>
                     <tbody>
                        <td border="1px" style="border: 1px solid #1abc9c; text-align: center"><?php echo $value['name']; ?></td>
                        <td border="1px" style="border: 1px solid #1abc9c; text-align: center"><?php echo $value['surname']; ?></td>
                        <td border="1px" style="border: 1px solid #1abc9c; text-align: center"><?php echo $value['email']; ?></td>
                        <td border="1px" style="border: 1px solid #1abc9c; text-align: center"><?php echo $value['phone']; ?></td>
                        <td border="1px" style="border: 1px solid #1abc9c; text-align: center"><input type="textarea" cols="10" rows="4" value="<?php echo $value['subject']; ?>"></td>
                     </tbody>
                     <?php } ?>
                  </table>
               </div>
            </div>
         </div>
      </nav>
   </body>
</html>