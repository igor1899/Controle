<?php

if ( !isset($_SESSION)) {
  session_start();
}

if ( !isset($_SESSION['CPF'])) 
else{
  header("location: login.php");
  }
?>
