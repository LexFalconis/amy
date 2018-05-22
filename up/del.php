<?php include "../chk_login.php";
// unlink -> função do php para deletar arquivo 
$arquivo = $_GET['loc'];
if (!unlink(str_replace("up/uploads/","uploads/",$arquivo)) and !unlink(str_replace("up/uploads/","uploads/thumbs/",$arquivo)))
{
  echo ("Erro ao deletar $arquivo");
  ?><p>&nbsp;</p><a href="../fotos.php">Voltar para fotos</a><br /><?php
}
else
{
  echo ("Deletado $arquivo com sucesso!");
  unlink(str_replace("up/uploads/","uploads/",$arquivo)); /* previso ver pq não deletou no IF... tá cagado...*/
  unlink(str_replace("up/uploads/","uploads/thumbs/",$arquivo));
  ?><p>&nbsp;</p><a href="../fotos.php">Voltar para fotos</a><br /><?php
}