<?php
// Anslutning till databasen

$servernamn ="localhost";
$dbAnvnm = "muad0002";
$dblosenord = "munada9812M";
$dbNamn = "muad0002";

$connect= mysqli_connect($servernamn, $dbAnvnm, $dblosenord, $dbNamn );

if( !$connect)
{
    die("Det gick inte att ansluta till databasen".mysqli_connect_error());
} 

