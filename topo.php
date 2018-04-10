<?php include"chk_login.php" ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
  <div class="nav">
    <ul class="menu" id="menu">
      <li>Home</li>
      <li>Fotos</li>
      <li>Videos</li>
      <li>Eventos</li>
      <li><a href="logout.php" title="Já vai <?php echo $_SESSION['login']; ?> ?">Sair</a></li>
      <li><button>-</button></li>
    </ul>
    <ul class="menu" id="menu" style="display:none; width: 200px;">
      <li><img src="imgs/home.png"></li>
      <li><img src="imgs/fotos.jpg"></li>
      <li><img src="imgs/video.png"></li>
      <li><img src="imgs/evento.png"></li>
      <li><a href="logout.php" title="Já vai <?php echo $_SESSION['login']; ?> ?"><img src="imgs/sair.png"></a></li>
      <li><button>+</button></li>
    </ul>
<script>
$( "button" ).click(function() {
  $( "ul.menu" ).toggle();
});
</script>
  </div>
