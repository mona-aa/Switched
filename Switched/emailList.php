

<?php

if(isset($_POST['subbutton'])) 
{
require 'databas.php'; // Anropa fil med anlutnig till databasen

$EmailSub= $_POST['SubEmail']; // Hämta informationen som skrivs in i formulären 

$sql= "INSERT INTO emailList (email_address) VALUES ('$EmailSub')"; // lägger in i databasen

//mysqli_query($connect, $sql );

if(mysqli_query($connect, $sql ))
{
    $message = "Du är prenumererad";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: index.php");
    exit();
}
else {
    echo "error";
}



}


?>




















<!-- $servernamn ="localhost";
$dbAnvandarnamn = "muad0002";
$dblosenord = "munada9812M";
$dbNamn = "muad0002";

$connect= mysqli_connect($servernamn, $dbAnvandarnamn, $dblosenord);
$db=mysqli_select_db($dbNamn);

if(isset($_POST['subbutton']))
{
    // require 'databas.php';
    $email= $_POST['SubEmail'];
    // $stmt =mysqli_stmt_init($connect);
    $sql = "INSERT INTO emailList(email_address) VALUES ($email) ";
    $result = mysqli_query($connect, $sql);
    // mysql_query($sql);
    echo "Thank You For Joining Our Newsletter";
 
}
else{
    echo "fungerar inte";
} -->

