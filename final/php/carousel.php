<?php
   include 'config.php';
   if (!$connect)
   {
       echo "Error" . mysqli_connect_errno($connect);
   }
   $query_afisho = "SELECT * FROM movies WHERE IMBd > 7 AND genre != 'serial'";
   $query_afisho_result = mysqli_query($connect, $query_afisho);
   if (!$query_afisho_result)
   {
       echo "Error";
   }
   $check_num_rows = mysqli_num_rows($query_afisho_result);
   
   ?>
<style type="text/css">
   html {
   font-family: Verdana, Geneva, sans-serif;
   color: #333;
   }
   .multicarousel .items > * {
   height: 200px;
   width: 200px;
   background: white;
   border: 4px solid #00B5B0;
   box-sizing: border-box;
   text-align: center;
   font-size: 300px;
   }
</style>
<script src="MultiCarousel.js"></script>
<h3>Top IMBD movies</h3>
<div id="MyCarousel">
   <?php
      while ($row = mysqli_fetch_array($query_afisho_result))
      {
      ?>
   <video class="zoom" width="300" height="150" poster="<?php echo '../poster/' . $row['image']; ?>" onclick="window.open('<?php echo 'Filma/' . $row['video']; ?>')"></video>
   <?php
      } ?>
</div>
<div style="text-align: center">
   <button onclick="carousel.previous()"><i style="color: black; font-size: 20px;" class="fa fa-arrow-circle-left"></i></button>
   <button onclick="carousel.pause()"><i style="color: red; font-size: 20px" class="fas fa-pause"></i></button>
   <button onclick="carousel.start()"><i style="color: green; font-size: 20px" class="fas fa-play"></i></button>
   <button onclick="carousel.next()"><i style="color: black; font-size: 20px" class="fa fa-arrow-circle-right"></i></button>
</div>
<script>
   const container = document.getElementById('MyCarousel');
   const carousel = new MultiCarousel({
     target: container,
     props: {
       delay: 1500,
       items: [...container.children],
       count: 9
     }
   });
</script>