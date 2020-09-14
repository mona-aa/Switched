<?php require "header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Stiler.css"> 
    <title>Alla produkter</title>
</head>
<body>
    

<section>

<h2>Alla produkter</h2>

<div class="gallert-container">
    <?php

      include_once 'databas.php';

      $sql = "SELECT * FROM  images ORDER BY id DESC ";
      $stmt = mysqli_stmt_init($connect);
      if(!mysqli_stmt_prepare($stmt, $sql))
      {
            echo "SQL statement gick inte!";
      }
      else
      {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
  
  //$result = mysqli_query($db, "SELECT * FROM images");

  while ($row = mysqli_fetch_array($result)) 
  {
  echo "<div>";
    echo "<img style= 'width:230px; height:230px;' src='images/".$row['image']."' >";
    echo "<h3>".$row['image_titel']."</h3>";
    echo "<p>".$row['image_text']."</p>";
  echo "</div>";
  }

      }
    ?>
</div>



</section>


    
</body>
</html>