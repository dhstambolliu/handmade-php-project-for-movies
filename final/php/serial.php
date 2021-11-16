<?php
   session_start();
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: login.php");
       exit;
   }
   include 'config.php';
   if (!$connect) {
   echo "Error".mysqli_connect_errno($connect);
   }
   
   $query_afisho = "SELECT * FROM seriale ORDER BY id DESC";
   $query_afisho_result = mysqli_query($connect,$query_afisho);
   if (!$query_afisho_result) {
   echo "Error";
   }
   mysqli_close($connect);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Index</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="../js/scripts.js"></script>
      <script type="text/javascript" src="../js/fontawesome.js"></script>
      <link rel="stylesheet" href="../css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
      <style>
         table {
         border-collapse: collapse;
         box-shadow: 0 0 10px 1px mediumseagreen;
         float: left;
         } 
         table.a {
         table-layout: auto;
         width: 160px; 
         }
         .over_image {
         position: relative;
         width: 50%;
         }
         .over_image:hover .imbd {
         opacity: 1;
         }
         .imbd {
         position: absolute;
         top: -6%;
         bottom:0;
         left: 0;
         right: 0;
         height: 10%;
         width: 200%;
         opacity: 0;
         transition: .5s ease;
         background-color: darkslategray;
         }
         .imbd_transform {
         color: #F3C313;
         font-size: 26px;
         font-weight: bolder;
         position: absolute;
         top: 55%;
         left: 50%;
         -webkit-transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         text-align: center;
         }
      </style>
   </head>
   <body>
      <?php include "../includes/navbar.php"; ?>
      <div class="content">
         <div>
            <?php
               while ($row = mysqli_fetch_array($query_afisho_result)) {
               ?>
            <table class="a gfg">
               <tr>
                  <td class="geeks">
                     <video class="zoom" width="214" height="280" poster="<?php echo '../poster/'.$row['image']; ?>" target="_parent" onclick="window.open('<?php echo $row["link"];?>')"></video>
                  </td>
               </tr>
               <td class="geeks">
                  <table class="a">
                     <tr><b style="font-size: 20px"><a href="<?php echo $row["link"];?>" target="_blank"><?php echo $row["title"];?></a></b>
                  </table>
            </table>
            <?php } ?>
         </div>
      </div>
      <table class="footer" id="myDIV">
         <tr>
            <td>
               <b>&copy 
               <?php
                  $copyYear = 2019; 
                  $curYear = date('d/m/Y');
                    echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                      ?> Copyright, Made with <i style="color:red" class="fas fa-heart"></i> from <a style="text-decoration: none; color: blue" href="index.php">Filma Online</a></b>
            </td>
         </tr>
      </table>
   </body>
</html>