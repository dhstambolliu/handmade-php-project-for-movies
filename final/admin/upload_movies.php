<?php
   session_start();
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
                     <li class="nav-item"><a href="upload_movies.php" class="nav-link text-white p-3 mb-2 btnnn active"><i class="fa fa-upload"></i> Upload movies</a></li>
                     <li class="nav-item"><a href="view_movies.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fa fa-eye"></i> View movies</a></li>
                     <li class="nav-item"><a href="modify.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-wrench"></i> Modifiko</a></li>
                     <li class="nav-item"><a href="/project/final/php/logout.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
               </div>
               <div class="upload_movies_form">
                  <div class="form-style-5">
                     <form action="upload_movies.php" method="post">
                        <p style="text-align: center; font-size: 22px;">Upload Movies Form</p>
                        <fieldset>
                           <legend><span class="number">Poster</span></legend>
                           <input type="file" name="image" placeholder="image" accept="image/*" required>
                           <legend><span class="number">Title</span></legend>
                           <input type="text" name="image_text" placeholder="image_text" required>
                           <legend><span class="number">Trailer Link</span></legend>
                           <input type="text" name="link" placeholder="link" required>
                           <legend><span class="number">Info</span></legend>
                           <input type="text" name="info" placeholder="info" required>
                           <legend><span class="number">Video Mp4</span></legend>
                           <input type="file" name="video" placeholder="video" accept="video/*" required>
                           <legend><span class="number">Genre</span></legend>
                           <input type="text" name="genre" placeholder="genre" required>
                           <legend><span class="number">IMBd</span></legend>
                           <input type="number" step="0.1" name="IMBd" placeholder="IMBd" required>
                           <legend><span class="number">Year</span></legend>
                           <input type="number" name="year" placeholder="YYYY" min="1930" max="2050" required><br>
                           <input type="submit" name="upload_movies" value="Upload">
                        </fieldset>
                     </form>
                  </div>
               </div>
               <?php
                  include "../php/config.php";
                  if (isset($_POST["upload_movies"])){
                  
                  
                  $query_insert = "INSERT INTO movies (image,image_text,link,info,video,genre,IMBd,year) VALUES ('".$_POST["image"]."', '".$_POST["image_text"]."', '".$_POST["link"]."', '".$_POST["info"]."', '".$_POST["video"]."', '".$_POST["genre"]."', '".$_POST["IMBd"]."', '".$_POST["year"]."')";
                  $query_insert_result = mysqli_query($connect,$query_insert);
                      if (!$query_insert_result){
                          echo "error";
                      }
                      else{
                          echo "<p style='text-align: center; color: green'>Upload completed successfully</p>";
                      }
                  }
                  mysqli_close($connect);
                  ?>
            </div>
         </div>
      </nav>
   </body>
</html>