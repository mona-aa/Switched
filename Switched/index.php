<?php require "header.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Home</title>

    <style>
      @media only screen and (max-width:620px) {
   .Banner_1, .grid1 {
    width:100%;
    }
    }
    </style>
</head>
<body>
  
<!-- Första Bilden - Banner 1-->
<div class="Banner_1">
  <div class="text"> <h2> Fast fashion is so out of fashion</h2></div>
</div>

<!-- Andra delen/Grid bilderna-Banner 2 -->
<section class="grid1">
  <div class="img1"></div>
  
  <div class="img2"></div>
  
  <div class="img3"></div>
  
  <div class="strapline">
    <blockquote>"Fast fashion is like fast food. After the sugar rush, it just leaves a bad taste in your mouth.”</blockquote>
    <blockquote>"Consume less Share better”</blockquote>
  </div>
  
    <div class="cta-wrapper">  
      <div class="cta">
        <h1>Vintage</h1>
        <p>"8 procent av människans klimatpåverkan kommer från modeindustrin – dubbelt så mycket som från flyg. Trycket för att minska kostnaderna och påskynda produktionstiden påverkar klimatet stort."</p>
        <a class="button" href="minSidaLog.php">Kom igång →</a>
    </div>
  </div>
</section>
  
<!-- Card/Info delen Banner 3-->
<div class="info">
  <div class="card">
        <div class="layer"></div>
        <div class="content">
        <div class="image">
         <img src="Bilder/change.jpg">
        </div>
        <div class="details">
         <h2>Gå igenom din garderob<br></h2>
        </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
  <div class="card">
        <div class="layer"></div>
        <div class="content">
        <div class="image">
          <img src="Bilder/affar.jpg">
        </div>
        <div class="details">
          <h2>Ta bilder av din kläder  <br></h2>
        </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
  <div class="card">
        <div class="layer"></div>
        <div class="content">
        <div class="image">
          <img src="Bilder/tshirt.jpg">
        </div>
        <div class="details">
          <h2> Vänta på erbjudande<br></h2>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>     
        </div>
    </div>
</div>


<?php 
 require "footer.php";
 ?> 
</body>
</html>


