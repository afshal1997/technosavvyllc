<?php

$servername = "localhost";
$db="technosavvyllc_Techno Savvy";
$username = "technosavvyllc_Techno Savvy";
$password = "}t8!_%f6.y8P";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>