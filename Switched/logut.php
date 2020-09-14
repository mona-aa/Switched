<?php
//Session försörs och användaren loggas ut 
session_start();
session_unset();
session_destroy();
header("Location:index.php")



?>