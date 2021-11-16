<?php 
   require_once "config.php";
   if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
   {
   $name = $connect->real_escape_string($_POST['name']);
   $surname = $connect->real_escape_string($_POST['surname']);
   $email = $connect->real_escape_string($_POST['email']);
   $phone = $connect->real_escape_string($_POST['phone']);
   $subject = $connect->real_escape_string($_POST['subject']);
   $sql="INSERT INTO contact (name, surname, email, phone, subject) VALUES ('".$name."','".$surname."', '".$email."', '".$phone."',  '".$subject."')";
   if(!$result = $connect->query($sql)){
   die('A problem happened [' . $connect->error . ']');
   }
   else
   {
   echo "Thank you! We will contact you soon";
   }
   }
   
   ?>