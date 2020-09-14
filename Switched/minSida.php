<?php require "header.php";?>

<?php
  // Anslut till databasen 
 $servernamn ="localhost";
 $dbAnvnm = "muad0002";
 $dblosenord = "munada9812M";
 $dbNamn = "muad0002";

 $db= mysqli_connect($servernamn, $dbAnvnm, $dblosenord, $dbNamn );

  // Initialize message variable
  $msg = "";

  // Om Lägg upp knapp trycks If 
  if (isset($_POST['upload'])) {
  	// Hämtar bild namn
  	$image = $_FILES['image']['name'];
  	// Hämtar titel and beskrivning text 
      $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      $image_titel = mysqli_real_escape_string($db, $_POST['image_titel']);

  	// Fil vägen till där bilden ska sparas 
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text, image_titel) VALUES ('$image', '$image_text', ' $image_titel')";
  	// kör sql sats för att spara i databsen  
  	mysqli_query($db, $sql);
       //Flytta bilder till mapen
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
      {
  		$msg = "Image uploaded successfully";
      }
      else
      {
  		$msg = "Failed to upload image";
  	  }
  }
  $result = mysqli_query($db, "SELECT * FROM images"); // Hämtar alla infromation från tabellen images
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Min Sida</title>

<style type="text/css">
   
   @media only screen and (max-width:620px) {
   .item_2,  {
    width:100%;
    }
    .grid1{
      width:60%;
    }
    }
   form{
   	width: 50%;
       margin: 20px auto;
       align:center;
   }
   form div{
       margin-top: 5px;
       
   } 
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>

</head>
<body>


<!-- Vänstra navigeringsfält -->
<div id=>
  <div class='item_2'>
  
  <h1> Min sida</h1>
   <img href="installningar.php" class="image7" src="Bilder/change.jpg">
    <ul>
        <li> <a href="minSida.php"> Mina inlägg</a>
        <li> <a href="#" > Chatt</a></li>
        <li> <a href="#"> Gillade</a></li>
        <li> <a href="installningar.php" > Inställningar</a></li>
        <li> <a href="kontakt.php" >Hjälp</a></li>
        <li>  <form action="logut.php" method="post">
        <button type="submit" class="logut_btn" name="logut-submit"> Logga ut</button>
        </form> </li>
        
     </ul>

     

  </div>
  <div class='item_2'>
    
  
  <h2> Lägg till inlägg </h2>
<!-- Förmulär för att lägga upp bilderna och text -->
<form method="POST" action="minSida.php" enctype="multipart/form-data" class="postForm" >
<input type="hidden" name="size" value="1000000">

<div>
  <input type="text" name="image_titel" class= "image_titel" placeholder = "Titel">
</div>
<div>
<textarea 
    id="text" 
    cols="40" 
    rows="4" 
    name="image_text" 
    class= "image_titel"
    placeholder="Information om produkten"></textarea>
</div>
<div>
  <input type="file" name="image" id="image" class="">
</div>

<div>
    <button type="submit" name="upload" id= "upload" class="Banner_7">Lägga upp</button>
</div>
</form>

<h2> Tidiagre inlägg</h2>

<?php
// Hämtar i en loop alla bilder och text som lagts in
while ($row = mysqli_fetch_array($result)) {
echo "<div id='img_div'>";
    echo "<img src='images/".$row['image']."' >";
    echo "<p>".$row['image_titel']."</p>";
    echo "<p>".$row['image_text']."</p>";
echo "</div>";
}
?>

  </div>
<!-- </div> -->



   
 <?php 
 require "footer.php";
 ?>  
 
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#upload').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Du måste välja en bild");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 