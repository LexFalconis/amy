<?php
$diretorio = "/home/cabox/workspace/amy/img_upload/";

  $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
  for ($k = 0; $k < count($arquivo['name']); $k++){
     $image = new Imagick();
      $image->thumbnailImage(1920, 1080);
      $image->readImage($arquivo['name'][$k]);
      $image->setImageFormat('jpeg');
      $image->setImageCompressionQuality(85);
      $image->stripImage();

      $arquivo['name'][$k] = $image->writeImage('nova_imagem.jpg');
     $destino = $diretorio."/".date("Y-m-d H:i:s").$arquivo['name'][$k];

      if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {echo "<br />MOVEUUUUUU<br>"; header( "refresh:3;url=fotos.php" ); }

      else {echo $arquivo['name'][$k] .": NAOOOO MOVEU<br />";}
  }



/*
$image = new Imagick();

    $image->thumbnailImage(800, 300);
    $image->readImage('image.jpg');
    $image->setImageFormat('jpeg');
    $image->setImageCompressionQuality(85);
    $image->stripImage();

    $image->writeImage('nova_imagem.jpg');*/