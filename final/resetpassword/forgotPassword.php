<?php
   use PHPMailer\PHPMailer\PHPMailer;
       require_once "functions.php";
   
       if (isset($_POST['email'])) {
           include '../php/config.php';
   
           $email = $connect->real_escape_string($_POST['email']);
   
           $sql = $connect->query("SELECT id FROM users WHERE email='$email'");
           if ($sql->num_rows > 0) {
   
               $token = generateNewString();
   
   	        $connect->query("UPDATE users SET token='$token', tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)WHERE email='$email'");
               
               $message="
   					<h2>Password Reset</h2>
   					<p>Your Account:</p>
   					<p>Email: ".$email."</p>
   					<p>Please click the link below to reset your password.</p>
   					<a href='http://localhost/project/final/resetpassword/resetPassword.php?email=$email&token=$token'>Reset Password</a>";
   
   	        require_once "PHPMailer/PHPMailer.php";
               require_once "PHPMailer/SMTP.php";
   	        require_once "PHPMailer/Exception.php";
               
               $mail = new PHPMailer();
   			        $mail->isSMTP();                                     
   			        $mail->Host = 'smtp.gmail.com';                      
   			        $mail->SMTPAuth = true;                               
   			        $mail->Username = 'insert your email address@gmail.com';  //insert your email address   
   			        $mail->Password = 'insert your email password';  //insert your email password                  
   			        $mail->SMTPOptions = array(
   			            'ssl' => array(
   			            'verify_peer' => false,
   			            'verify_peer_name' => false,
   			            'allow_self_signed' => true
   			            )
   			        );                         
   			        $mail->SMTPSecure = 'ssl';                           
   			        $mail->Port = 465;                                   
   
   			        $mail->setFrom('insert your email address@gmail.com'); //insert your email address
   			        
   			        //Recipients
   			        $mail->addAddress($email);              
   			        $mail->addReplyTo('insert your email address@gmail.com'); //insert your email address
   			       
   			        //Content
   			        $mail->isHTML(true);                                  
   			        $mail->Subject = 'Reset Password Form';
   			        $mail->Body    = $message;
   
   			        $mail->send();
   
   	        if ($mail == true)
       	        exit(json_encode(array("status" => 1, "msg" => 'Link successfully sent in your email address!')));
       	    else
       	        exit(json_encode(array("status" => 0, "msg" => 'Somwthing wrong happened, try again later!')));
           } else
               exit(json_encode(array("status" => 0, "msg" => 'Check your email!')));
       }
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Forgot Password System</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>
      <div class="container" style="margin-top: 1px;">
         <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
               <img src="images/logo1.png"><br><br>
               <input class="form-control" id="email" placeholder="Insert your email address"><br>
               <input type="button" class="btn btn-primary" value="Reset Password">
               <br><br>
               <p>Remember Password?<br><a href="http://localhost/project/final/php/login.php" class="btn btn-primary">Go Back to login</a></p>
               <p id="response"></p>
            </div>
         </div>
      </div>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script type="text/javascript">
         var email = $("#email");
         
         $(document).ready(function () {
             $('.btn-primary').on('click', function () {
                 if (email.val() != "") {
                     email.css('border', '1px solid green');
         
                     $.ajax({
                        url: 'forgotPassword.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            email: email.val()
                        }, success: function (response) {
                             if (!response.success)
                                 $("#response").html(response.msg).css('color', "green");
                             else
                                 $("#response").html(response.msg).css('color', "red");
                         }
                     });
                 } else
                     email.css('border', '1px solid red');
             });
         });
      </script>
   </body>
</html>