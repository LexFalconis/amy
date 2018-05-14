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
      <li><a href="home.php"><img src="imgs/home.png"/><p>Home</p></a></li>
      <li><a href="fotos.php"><img src="imgs/fotos.png"/><p>Fotos</p></a></li>
      <!--li><a href="#"><img src="imgs/video.png"/><p>Videos</p></a></li>
      <li><a href="#"><img src="imgs/evento.png"/><p>Eventos</p></a></li-->
      <?php
      if($_SESSION["acesso"]=="1"){
        echo "<li><a href='up.php'><img src='imgs/up.png'/><p>UP!</p></a></li>";
      }
      ?>
      <li><a href="logout.php?log=x" title="Já vai <?php echo $_SESSION['login']; ?> ?"><img src="imgs/sair.png"/><p>Sair</p></a></li>
      <!--li><img src="imgs/altmenu.png" class="button"></li-->
    </ul>
    <!--ul class="menu" id="menu" style="display:none; width: 200px;">
      <li><a href="home.php"><img src="imgs/home.png" title="Home"></a></li>
      <li><a href="fotos.php"><img src="imgs/fotos.png" title="Fotos"></a></li>
      <li><img src="imgs/video.png" title="Videos"></li>
      <li><img src="imgs/evento.png" title="Eventos"></li>
      <li><a href="logout.php?log=x" title="Sair: Já vai < ?php echo $_SESSION['login']; ?> ?"><img src="imgs/sair.png"></a></li>
      <li><img src="imgs/altmenu.png" title="Alterar aparência do menu" class="button"></li>
    </ul-->
<!--script>
$( ".button" ).click(function() {
  $( "ul.menu" ).toggle();
});
</script-->
  </div>
<div class="content">