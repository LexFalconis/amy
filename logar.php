<?php
if(isset($_POST['login']) and $_POST['login']!="" and $_POST['senha']!=""){
  echo "<br />Post OK";
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  include "con.php";
  $sqlUser = 'SELECT * FROM usuarios WHERE LOGIN = "' . $login. '"';
  try{
    $read = $db->prepare($sqlUser);
    $read->execute();
  }catch(PDOException $e){
    echo $e->getMessage();
  }
  
  
  if($dtl = $read->FETCH(PDO::FETCH_OBJ)){
    if($dtl->senha == $senha){
      echo "<br />login ok";
      session_start();
      $_SESSION["login"] = $login;
      echo "<br />Login é: " . $_SESSION["login"];
    }else{
      echo "<br />senha incorreta";
    }
    
  }else{
    echo "<br />Login incorreto";
  }

  
} else {
  echo "NO Post";
}