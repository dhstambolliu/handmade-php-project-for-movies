<?php 
   include '../php/config.php';
   if($_REQUEST["id"]){
       $id_row = $_GET["id"];
       
       $query_delete = "DELETE FROM movies WHERE id=".$id_row;
   //    echo $query_delete;
       $query_delete_result = mysqli_query($connect,$query_delete);
       if(!$query_delete_result){
           echo "Error".mysqli_error();
       }else{
           header("Location:view_movies.php");
       }
       mysqli_close($connect);
   }
   
   ?>
