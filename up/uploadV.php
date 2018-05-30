<a href="javascript:window.history.go(-1)" class="voltar">Voltar para página anterior...</a><br />
<p>
  &nbsp;
</p>
<?php include"../chk_login.php";

$diretorio = "uploads/video";
print_r($_FILES["upload_video"]);
if (!is_dir($diretorio)){
  echo "A pasta $diretorio nao existe...";
} else {
  echo"A pasta Existe!!!<br>";

  $arquivo=$_FILES["upload_video"];
  $destino = $diretorio."/".$arquivo['name'];

  if (move_uploaded_file($arquivo['tmp_name'],$destino)) {
    echo "MOVEUUUUUU<br>";
  } else {
    echo "NAOOOO MOVEU";
    print_r($arquivo['tmp_name']);
  }

}
?>