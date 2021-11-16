<?php
   // Initialize the session
   session_start();
    
   // Check if the user is logged in, otherwise redirect to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: login.php");
       exit;
   }
    
   // Include config file
   require_once "config.php";
    
   // Define variables and initialize with empty values
   $new_password = $confirm_password = "";
   $new_password_err = $confirm_password_err = "";
    
   // Processing form data when form is submitted
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    
       // Validate new password
       if(empty(trim($_POST["new_password"]))){
           $new_password_err = "Plese insert password";     
       } elseif(strlen(trim($_POST["new_password"])) < 8){
           $new_password_err = "Password must contain 8 or more characters";
       } elseif(!preg_match("/[A-Z]/", $_POST["new_password"])){
           $new_password_err = "Pussword must contain an upercase letter";
       } elseif(!preg_match("@[0-9]@", $_POST["new_password"])){
           $new_password_err = "Password must contain a number";
       } elseif(!preg_match("@[^\w]@", $_POST["new_password"])){
           $new_password_err = "Password must contain a character";
       } else{
           $new_password = trim($_POST["new_password"]);
       }
       
       // Validate confirm password
       if(empty(trim($_POST["confirm_password"]))){
           $confirm_password_err = "Please confirm password.";
       } else{
           $confirm_password = trim($_POST["confirm_password"]);
           if(empty($new_password_err) && ($new_password != $confirm_password)){
               $confirm_password_err = "Password don't match.";
           }
       }
           
       // Check input errors before updating the database
       if(empty($new_password_err) && empty($confirm_password_err)){
           // Prepare an update statement
           $sql = "UPDATE users SET password = ? WHERE email = ?";
           
           if($stmt = mysqli_prepare($connect, $sql)){
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "si", $param_password, $param_email);
               
               // Set parameters
               $param_password = password_hash($new_password, PASSWORD_DEFAULT);
               $param_email = $_SESSION["email"];
               
               // Attempt to execute the prepared statement
               if(mysqli_stmt_execute($stmt)){
                   // Password updated successfully. Destroy the session, and redirect to login page
                   session_destroy();
                   header("location: login.php");
                   exit();
               } else{
                   echo "Oops! Something went wrong. Please try again later.";
               }
           }
           
           // Close statement
           mysqli_stmt_close($stmt);
       }
       
       // Close connection
       mysqli_close($connect);
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
                     <li class="nav-item"><a href="profile.php" class="nav-link text-white p-3 mb-2 btnnn "><i class="fas fa-user"></i> Edit profile</a></li>
                     <li class="nav-item"><a href="change_password.php" class="nav-link text-white p-3 mb-2 btnnn active"><i class="fas fa-lock"></i> Change Password</a></li>
                     <li class="nav-item"><a href="/projekt/finali/php/logout.php" class="nav-link text-white p-3 mb-2 btnnn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                  </ul>
               </div>
               <div class="table1">
                  <p style="text-align: center">Change Password</p>
               </div>
               <br>
               <div class="container" >
                  <center>
                     <div class="upload_movies_form">
                        <div class="form-style-5">
                           <h2>Fill the form to change the password.</h2>
                           <br>
                           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                              <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                                 <label>New Password: <span style="color: red">*</span></label>
                                 <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                                 <span class="help-block"><?php echo $new_password_err; ?></span>
                              </div>
                              <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                 <label>Confirm Password: <span style="color: red">*</span></label>
                                 <input type="password" name="confirm_password" class="form-control">
                                 <span class="help-block"><?php echo $confirm_password_err; ?></span>
                              </div>
                              <div class="form-group">
                                 <br>
                                 <input type="submit" class="btn btn-primary" value="Update">
                                 <a class="btn btn-primary" href="index.php">Cancel</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </center>
               </div>
            </div>
         </div>
      </nav>
   </body>
</html>