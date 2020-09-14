


<?php require "header.php";
require 'databas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inställningar</title>
</head>
<body>
    
<?php

$sql = "SELECT * From VintageCorner";
$result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result) > 0){
    $id= $rowImg['email_id'];
    $sqlImg ="SELECT * FROM profilBild WHERE emailID = '$id'";
    $resultImg = msqli_query($connect,$sqlImg);
    while ($rowImg = mysqli_fetch_assoc( $resultImg))
    {
       echo "<div>";
       if($rowImg['status']== 0)
       { 
        echo "<img src='Bilder/profile'.$id'.jpg>";
       }
       else
       {
           echo "<img src='Bilder/jackor.jpg'>";
       }
       echo $row['anvandarnamn'] ;
       echo "</div>";
    }
} 
else 
{
    echo "ingen användare";
}


if(isset($_SESSION['anvandnm']))
     {
       if (_SESSION['anvandnm']  == 1)
       {

       }
       echo "<form  action='inlagg.php' method='POST' enctype='multipart/form-data' class='postForm'>
       <span>Fil:</span> <input name='file' type='file' placeholder=' Välj bild'> <br>
       <button type='submit' name='inlagg_btn' class='Banner_7 button'>Lägg upp</button>";
     }
     
?>


<?php 
 require "footer.php";
 ?>  
</body>
</html>
