<?php
session_start();
if (isset($_SESSION['login']) and !empty($_SESSION['login'])){
  echo $_SESSION['login'];
}else{
  header('Location: login.php');
}