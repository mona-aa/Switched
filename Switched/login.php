<?php
if(isset($_POST['login-submit']))
{
    require 'databas.php';
    $mailId = $_POST['anvandarnamn']; // hämta inskriven användare och lösenord namn från inloggningformulär
    $Losord = $_POST['losenord_1'];
   
    // Om användarnamn eller lösenord ej är i fyllt skickas användare tillbaka med tom fält meddelande i URL fält
    if(empty($mailId) || empty($Losord) )
    {
        header("Location: minSidaLog.php?error=tomfalt");
        exit();

    }
    else{
        $sql = "SELECT * FROM VintageCorner WHERE anvandarnamn=? OR email_id=?;"; // Hämtar alla användaren från tabellen med alla användarnamn och lösenord för att verifiera med det som skrivs in
        $stmt = mysqli_stmt_init($connect); // Anluter till databasen
        if(!mysqli_stmt_prepare($stmt, $sql )) // Om anlutning eller sql sats inte lyckas skicka tillbaka med sql error medelande i URL
        {
            header("Location: minSidaLog.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailId,  $mailId ); // 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result))
            {
                $losenCheck = password_verify($Losord, $row['losenord']); // Kollar ifall lösenord matchar med det i databas
                if($losenCheck == false )                        // ifall det är fel skicka tillbaka med fel lösenord i URL
                {
                    header("Location: minSidaLog.php?error=felLosenord");
                    exit();
                }
                elseif ($losenCheck == true)   // Om det stämmer starta session och kontrollera med användaren i databasen, Login lyckas medelande i URL
                {
                    session_start();
                    $_SESSION['anvandnm'] = $row['anvandarnamn'];

                    header("Location: minSida.php?login=success");
                    exit();
                }
                else
                {
                    header("Location: minSidaLog.php?error=felLosenord"); // Fel Lösenord skicka tillbaka med fel lösenord i URL
                    exit();
                }
            }
            else{
                header("Location: minSidaLog.php?error=ingenAnvandare"); //Ifall använadare inte är registrerad och finns med i databasen skickas de tillbaka med ingen användare i URL
                exit();
            }
        }
    }

}
else{
    header("Location: minSida.php"); // Om användaren är registrerad och inga fel tas dom till Min Sida
     exit();
}