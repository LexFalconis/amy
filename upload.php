<?php
  /*$zip = zip_open($_FILES['fileUpload']);
  if (is_int($zip)) {
      echo "Erro: $zip tem certeza de que é um arquivo zip?";
  } else {
      echo "Ok é um zip válido!";
      $dir = '/home/cabox/workspace/amy/img_upload/';
      $new_name = $dir . date("Y-m-d H-i-s") . ".zip";
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $new_name);
    var_dump($zip);
    echo "<hr>";
    var_dump($dir);
    echo "<hr>";
    var_dump($new_name);
    
    //Descompacta e verica os mime cada um dos arquivos com getimagesize
  }*/

$diretorio = "/home/cabox/workspace/amy/img_upload/";

if (!is_dir($diretorio)){ echo "Pasta $diretorio nao existe";} 

else { echo "A Pasta Existe<br>";

			$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".date("Y-m-d H:i:s").$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {echo "<br />MOVEUUUUUU<br>"; header( "refresh:3;url=fotos.php" ); }

					    else {echo $arquivo['name'][$k] .": NAOOOO MOVEU<br />";}
					}		

}