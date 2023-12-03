<?php

require_once "include/config.php";

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./signup.php';" . "</script>";
  exit;
}
?>

