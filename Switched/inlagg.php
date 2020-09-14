

<?php

if(isset($_POST['inlagg_btn']))
{
   $file= $_FILES['file'];

   $fileNamne= $_FILES['file']['name'];
   $fileTmpName= $_FILES['file']['tmp_name'];
   $fileSize= $_FILES['file']['size'];
   $fileError= $_FILES['file']['error'];
   $fileType= $_FILES['file']['type'];

   $fileExt = explode('.',$fileNamne);
   $fileActualExt = strtolower(end($fileExt));

   $allowed= array('jpg','jpeg', 'png', 'pdf');


   if(in_array( $fileActualExt, $allowed))
   {
     if($fileError === 0)
     {
         if($fileSize < 10000000)
         {
            $fileNameNew= uniqid('', true).".".$fileActualExt ;
            $fileDestination = 'uppladadeBilder'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination );
            header("Location:index.php?uppladninglyckad");

         }
         else
         {
             echo "Din fil är för stor";
         }
     }
     else 
     {
        echo "Det gick inte ladda upp din bild";
     }
   }
   else
   {
       echo "Du kan inte ladda upp den filtypen";
   }

}