<?php session_start();
if(isset($_POST['login']) and $_POST['login']!="" and $_POST['senha']!=""){
  // echo "<br />Post OK";
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  include "conn.php";
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
      $_SESSION["acesso"] = $dtl->permissao;
      // echo "<br />Seja Bem Vindo(a): " . $_SESSION["login"];
      echo $_SESSION["acesso"];
      header( "Location:home.php" );
      exit;
    }else{
      echo "<br />senha incorreta";
      header( "refresh:2;url=login.php" );
    }

  }else{
    // echo "<br />Login incorreto";
    header( "refresh:2;url=login.php" );
    exit;
  }


} else {
  echo "NO Post";
  header("refresh:3;url=index.php");
}
