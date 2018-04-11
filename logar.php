<?php session_start();
if(isset($_POST['login']) and $_POST['login']!="" and $_POST['senha']!=""){
  // echo "<br />Post OK";
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
      // echo "<br />login ok";
//      session_start();
      $_SESSION["login"] = $login;
      // echo "<br />Seja Bem Vindo(a): " . $_SESSION["login"];
      header( "refresh:3;url=home.php" );
      exit;
    }else{
      echo "<br />senha incorreta";
    }

  }else{
    // echo "<br />Login incorreto";
    header( "refresh:2;url=index.php" );
    exit;
  }


} else {
  echo "NO Post";
}
