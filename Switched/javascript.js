
// Skapa Konto
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

//När användare klickar skapa konto aktiveras och bytes till högra sid 
signUpButton.addEventListener('click', () => 
{
	container.classList.add("right-panel-active");
});
// när logga in trycks tas högra sidan bort och loga in formulär kommer tillbaka
signInButton.addEventListener('click', () => 
{
	container.classList.remove("right-panel-active");
});

// Fast navfalt 

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



