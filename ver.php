<?php
include "topo.php";
if($_GET){
    $caminho = $_GET['loc'];
?>
  <div class="ver_foto">
    <h3>♥ Com amor, Amy ♥</h3>
    <a href="javascript:window.history.go(-1)" class="voltar">Voltar para página anterior...</a><br />
    <a href="up/del.php?loc=<?php echo $caminho; ?>">Deletar</a>
    <p>&nbsp;</p>
  <img src="<?php echo $caminho;?>">
  </div>
<?php
}else{
  header( "refresh:0;url=home.php" );
}
include "rodape.php";