<?php 
include '../php/config.php';
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../php/login.php");
    exit;
}

if($_REQUEST["id"]){
    $id_row = $_GET["id"];
    
    $query_select = "SELECT * FROM movies WHERE id=".$id_row;
    $query_select_result = mysqli_query($connect,$query_select);
    if(!$query_select_result){
        echo "Error",mysqli_error();
    }
    $row = mysqli_fetch_array($query_select_result);
    mysqli_close($connect);
}

if(isset($_POST["modify"])){
    include '../php/config.php';

    $image = mysqli_real_escape_string($connect,$_POST["image"]);
    $image_text = mysqli_real_escape_string($connect,$_POST["image_text"]);
    $link = mysqli_real_escape_string($connect,$_POST["link"]);
    $info = mysqli_real_escape_string($connect,$_POST["info"]);
    $video = mysqli_real_escape_string($connect,$_POST["video"]);
    $genre = mysqli_real_escape_string($connect,$_POST["genre"]);
    $IMBd = mysqli_real_escape_string($connect,$_POST["IMBd"]);
    $year = mysqli_real_escape_string($connect,$_POST["year"]);

    
    $query_update = "UPDATE movies SET image='".$image."',image_text='".$image_text."',link='".$link."',info='".$info."',video='".$video."' ,genre='".$genre."' ,IMBd='".$IMBd."' ,year='".$year."' WHERE id=".$id_row;
    $query_update_result = mysqli_query($connect,$query_update);
    if(!$query_update_result){
        echo "Error".mysqli_error();
    }else{
        header("Location:view_movies.php");
    }
    mysqli_close($connect);
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>
<div class="upload_movies_form">
    <div class="form-style-5">
            <h2 style="text-align: center"><b>Modify Movies</b></h2>

            <form method="POST">
                <fieldset>
            <legend><span class="number">Poster: </span></legend>
                    <input type="file" class="input-field" name="image" accept="image/*" required value="<?php echo $row['image']; ?>">
            <legend><span class="number">Title: </span></legend>
                    <input type="text" class="input-field" name="image_text" value="<?php echo $row['image_text']; ?>">
            <legend><span class="number">Trailer link: </span></legend>
                    <input type="text" class="input-field" name="link" value="<?php echo $row['link']; ?>">
            <legend><span class="number">Info: </span></legend>
                    <input type="text" class="input-field" name="info" value="<?php echo $row['info']; ?>">
            <legend><span class="number">Video Mp4: </span></legend>
                    <input type="file" name="video" accept="video/*" required value="<?php echo $row['video']; ?>">
            <legend><span class="number">Genre: </span></legend>
                    <input type="text" class="input-field" name="genre" value="<?php echo $row['genre']; ?>">
            <legend><span class="number">IMBd: </span></legend>
                    <input type="number" step="0.1" name="IMBd" value="<?php echo $row['IMBd']; ?>">
            <legend><span class="number">Year: </span></legend>
                    <input type="number" name="year" min="1930" max="2050" value="<?php echo $row['year']; ?>">
                    <br>
                    </fieldset>
            <input type="submit" class="button-box" name="modify" value="Update">
                
            </form>
        </div>
    </div>
</body>
</html>                            
