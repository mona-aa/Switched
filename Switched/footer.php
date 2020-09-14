<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stiler.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
      @media only screen and (max-width:620px) {
   .footer-distributed, .subscribe, .footer-left, .footer-center, .footer-right{
    width:100%;
    }
    }
    </style>
</head>

<body>

<footer class="footer-distributed">
<!-- Skickar till emailFilen där email sparas i databasen -->
<div class="subscribe">
  <form action="emailList.php" method="POST"> 
   <h1> Bli inspirerad! prenumerera för nyheter</h1> 
   <div class="email-box">
    <i class="fas fa envelope-open"></i>
    <input class="tbox" type="text" name="SubEmail" placeholder="Skriv ditt email">
    <input class="btn" type="submit" placeholder= "prenumerera" name="subbutton">
   </div>

  </form>
</div>
   
<div class="footer-left">
 
      <h3>Switched</h3>

		<p class="footer-links">
		<a href="index.php">Home</a>
	·
		<a href="omOss.php">Om switched</a>
	·
		<a href="kontakt.php">Kontakt och frågor</a>
    </p>
    <p class="footer-company-name">Switched | Designed by Mona &copy; 2019</p>
    
</div>
 
<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>Västra Götaland</span> Trollhättan, Sverige</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+46762099231</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mona.dahir@hotmail.se">mona.dahir@hotmail.se</a></p>
		</div>
 
</div>
 
<div class="footer-right">
 
		<p class="footer-company-about">
		<span>Hitta oss</span></p>
 
		<div class="footer-icons">
 
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
 
</div>



</footer>
</body>
</html>