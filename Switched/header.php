<?php 
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Stiler.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

<!-- navigeringsfält -->
<header id="navbar"> 
     <a class="logo" href="index.php" >Switched</a>
 <div class="menu"></div>
  <div class="wrap">
   <div class="search">

 <div class="dropdown">
  <button class="Kategorierbtn"> Kategorier <span class="arrow">&#x25BC; </span> </button>
  <div class="dropdown-content">
      <a href="allaUppladningar.php"> Alla produkter</a>
      <a href="#"> Nya inlägg</a>
      <a href="#"> kläning </a>
      <a href="#"> T-shirt </a>
      <a href="#"> Byxor </a>
      <a href="#">kjolar</a>
      <a href="#">Dam</a>
      <a href="#">Herr</a>
      <a href="#">Jackor</a>
      <a href="#">Skor</a>
      <a href="#">Accessoarer</a> 
   </div>
 </div>

      <input type="text" class="searchTerm" placeholder="Vad letar du efter?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
      </button>
      </div>
 </div>

   <nav>
      <ul>
        
        <?php
  //  Filtrera vilka funktioner användare har tillgång till ifall dom är inloggade eller inte
     if(!isset($_SESSION['anvandnm']))
     {
      echo "<li> <a href='index.php' > Home</a>";
      echo "<li> <a href='omOss.php'> Om oss </a></li>";
      echo "<li> <a href='minSidaLog.php'>Logga in</a></li>";
     }
     else
     {
        echo "<li> <a href='index.php'> Home</a>";
        echo "<li> <a href='minSida.php'> Min Sida </a></li>";
        echo "<li> <a href='omOss.php'> Om oss </a></li>";
     }

 ?> 
        
     </ul>
   </nav>
 <div class="clearfix"></div>
</header>

<!-- drop down meny för head vid min width -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>

    $(document).ready(function() 
    {
        $('.menu').click(function(){
            $('.menu').toggleClass('active')
            $('nav').toggleClass('active')
        })
    })
</script>

<!-- Funktion för att navigeringsfält hänger med ner -->
<script scr="javascript.js">
 
 window.onscroll = function() {myFunction()};

 var navbar = document.getElementById("navbar");
 var sticky = navbar.offsetTop;

 function myFunction() 
 {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
 }

</script>

</body>
</html>