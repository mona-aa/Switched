<?php

if(isset($_POST['reg_submit'])) 
{
   require 'databas.php'; // Ansluter till databas
 
   $Anvandarnamn = $_POST['anvandarnamn'];  // Hämtar det som skrivs i registrerings formulären
   $Email = $_POST['email'];
   $Losenord = $_POST['losenord_1'];
   $LosenordB = $_POST['losenord_2'];

   // Om någon av fälten är tom kommer felmedeleande upp i URL 
   if(empty($Anvandarnamn) || empty($Email) || empty($Losenord) || empty($LosenordB) )
   {

     header("Location: minSidaLog.php?error=emptyfields&anvandarnamn=".$Anvandarnamn."&mail=".$Email);
     exit();
   }

  // Filtrera för vilka tecken som är tillåtet, säkerhet sidan för sql injektion eller xss attack
  //Kontrollera om email är regesterad 
   elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*/$", $Anvandarnamn) )
   {
     header("Location: minSidaLog.php?error=ogiltiganvandarnamn"); //Fel medelande om användaren inte är registrerad
     exit();
   }

   elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL))
   {
     header("Location: rminSidaLog.php?error=ogiltiganvandarnamn&anvndn=".$Anvandarnamn);
     exit();
   }
   //elseif (!preg_match("/^[a-zA-Z0-9]*/$", $Anvandarnamn))
  // {
    // header("Location: registrera.php?error=ogiltiganvandarnamn&mail=".$Email);
     //exit();
   //}

   // Kontrollera lösenorden matchar med lösenord i databasen
   elseif( $Losenord !== $LosenordB)
   {
     header("Location: minSidaLog.php?error=losenordCheck&anvdnm=".$Anvandarnamn."&mail=".$Email);
     exit();
   }


   else
   {    // Om inga fel anslut till databasen till tabllen för användarnamn
        $sql = "SELECT anvandarnamn FROM VintageCorner WHERE anvandarnamn=?";
        $stmt =mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)) 
        {
            header("Location: minSidaLog.php?error=sqaalerror"); // Fel medelande om det ej går ansluta till databas
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s",  $Anvandarnamn);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if( $resultCheck > 0) // kolla om användaren är redan registrerad
            {
                header("Location: minSidaLog.php?error=anvandarnamnUtagen&mail=".$Email);
                exit();
            }
            else
            {    // De värden som ska sättas in
                $sql = "INSERT INTO VintageCorner ( anvandarnamn, email_id, losenord) VALUES ( ?, ?, ?) ";
                $stmt =mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt, $sql)) 
                 {
                     header("Location: minSidaLog.php?error=sqlerror"); // Fel medelande om det ej går läggs in det
                     exit();
                }
                else
                {
                    $hashedpwd = password_hash($Losenord, PASSWORD_DEFAULT); // Hasha lösenord innan det sparas i databasen
                  
                    mysqli_stmt_bind_param($stmt, "sss",  $Anvandarnamn, $Email, $hashedpwd); // Sätter in alla användanamn, email och hashad lösenord i databasen
                    mysqli_stmt_execute($stmt);
                    header("Location: minSidaLog.php?loggin=succsess");
                    exit();
                }
            }
        }
   }
   myqsli_stmt_colse($stmt);
   myqsli_close($connect);
}
else{
    header("Location: minSidaLog.php");
     exit();
}