<?php /*echo "<pre>";
    print_r($_SERVER);
    echo "</pre><hr>";
echo "<pre>";
    echo $_SERVER["HTTP_HOST"];
    echo "</pre><hr>";*/
include"chk_login.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/amy/css/style.css" />
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
  <div class="backnav">
  <div class="nav">
    <ul class="menu" id="menu">
      <li><a href="home.php"><img src="imgs/home.png"/><p>Home</p></a></li>
      <li><a href="fotos.php"><img src="imgs/fotos.png"/><p>Fotos</p></a></li>
      <li><a href="videos.php"><img src="imgs/video.png"/><p>Videos</p></a></li>
      <!--li><a href="#"><img src="imgs/evento.png"/><p>Eventos</p></a></li-->
      <?php
      if($_SESSION["acesso"]=="1"){
        echo "<li><a href='up.php'><img src='imgs/up.png'/><p>UP!</p></a></li>";
      }
      ?>
      <li><a href="logout.php?log=x" title="Já vai <?php echo $_SESSION['login']; ?> ?"><img src="imgs/sair.png"/><p>Sair</p></a></li>
    </ul>
  </div>
  </div>
  <div class="break"></div>
<div class="content">