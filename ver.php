<?php
include "topo.php";
if($_GET){
    
?>
  <div class="ver_foto">
    <h3>♥ Com amor, Amy ♥</h3>
    <a href="javascript:window.history.go(-1)" class="voltar">Voltar para página anterior...</a><br />
  <img src="<?php echo $_GET['loc'];?>">
  </div>
<?php
}else{
  header( "refresh:0;url=home.php" );
}
include "rodape.php";