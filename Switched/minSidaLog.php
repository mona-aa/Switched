

<!Doctype html>
<html> 
<head>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="minSidaLog.css">
</head>
<body> 
 <!-- Navigeringsfält -->
  <a class="logo" href="index.php" >Switched</a>
     <div class="menu"></div>
  <nav>
      <ul>
        <li> <a href="index.php"> Home</a>
        <li> <a href="omOss.php"> Om oss </a></li>
        <li> <a href="kontakt.php"> Kontakt & FAQ </a></li>
     </ul>
  </nav>
<div class="clearfix"></div>

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


<!-- Loggin Formulär -->
<h2> Logga in eller skapa ett konto</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="SkapaKonto.php" method="post">
			<h1>Skapa konto</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
            <span>logga in med din epost</span>
            <input type="text" name="anvandarnamn" placeholder = "Användarnamn" required>  <br>
            <input type="email" name="email" placeholder= "Email" required> <br>
            <input type="password" name="losenord_1" placeholder ="Lösenord" required>  <br>
            <input type="password" name="losenord_2" placeholder ="Bekräfta lösenord igen" required>  <br>
            <button type="submit" name="reg_submit"> Skapa konto </button>
        </form>
	</div>
 <div class="form-container sign-in-container">
    <form action ="login.php" method="post">
			<h1>Logga in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
            <span>Skriv ditt användarnamn</span>
            
          <input type="text" name="anvandarnamn" placeholder="Användarnamn/E-mail">
          <input type="password" name="losenord_1" placeholder="Lösenord">
          <a href="#">Glömt Lösenord?</a>
          <button type="submit" name="login-submit"> Logga in</button>
    </form>
 </div>  <!-- Flyttar mellan formulären när man trcker på login eller skapa med javafunktion, Täcker inlogg eller skapa formulären när det inte trycks på dom-->
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Välkomen Tillbaka!</h1>
				<p>Logga in med användarnamn eller epost</p>
				<button class="ghost" id="signIn">Logga in</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Välkomen</h1>
				<p>Fyll i dinna uppgifter för att kom igång</p>
				<button class="ghost" id="signUp">Skapa konto</button>
			</div>
		</div>
	</div>
</div>

<script src="javascript.js"></script>

 
</body>
</html>
