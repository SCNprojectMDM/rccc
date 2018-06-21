<?php
include_once('includes/bovenstuk.php');
  $db = mysqli_connect("localhost", "root", "", "scnproject");
  $result = mysqli_query($db, "SELECT * FROM aircraft");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }

  ?>





<?php
include_once('includes/onderstuk.php');
?>

<style>
  .img_div{
    width: 20%;
    height: 35%;
    padding: 5px;
    margin-left: 4%;
    margin-bottom: 2%;
    margin-top: 2%;
    border: 2px solid black;
    background-color: #3d5afe;
    float: left;
    border-radius: 1%;

   }
   .img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
   
    width: 25%;
    height: 65%;
   }
  
</style>