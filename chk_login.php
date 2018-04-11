<?php
session_start();
if (isset($_SESSION['login']) and !empty($_SESSION['login'])){
  echo $_SESSION['login'];
}else{
  echo "???? Erro na session ????";
  echo $_SESSION['login'];
  header( "refresh:1;url=login.php" );
}