<?php

if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['CPF'])) {
  header("location: login.php");
} else {
  session_start();
}
?>
