<?php include"chk_login.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
  <div class="nav">
    <ul class="menu" id="menu">
      <li><a href="home.php">Home</a></li>
      <li><a href="fotos.php">Fotos</a></li>
      <li>Videos</li>
      <li>Eventos</li>
      <li><a href="logout.php?log=x" title="Já vai <?php echo $_SESSION['login']; ?> ?">Sair</a></li>
      <?php
      if($_SESSION["acesso"]=="1"){
        echo "<li><a href='up.php'>UP!</a></li>";
      }
      ?>
      <li><button>-</button></li>
    </ul>
    <ul class="menu" id="menu" style="display:none; width: 200px;">
      <li><a href="home.php"><img src="imgs/home.png"></a></li>
      <li><a href="fotos.php"><img src="imgs/fotos.jpg"></a></li>
      <li><img src="imgs/video.png"></li>
      <li><img src="imgs/evento.png"></li>
      <li><a href="logout.php?log=x" title="Já vai <?php echo $_SESSION['login']; ?> ?"><img src="imgs/sair.png"></a></li>
      <li><button>+</button></li>
    </ul>
<script>
$( "button" ).click(function() {
  $( "ul.menu" ).toggle();
});
</script>
  </div>
<div class="content">