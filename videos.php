<?php include "topo.php";
include "conn.php"; ?>
<div class="videos">
  <h1>Luz, Câmera, Ação!</h1>
  <h2>...Ataque de fofura, ativar ♥</h2>
<?php

/*$dir = "/home/cabox/workspace/amy/fotos/";
foreach (glob ($dir."*", GLOB_ONLYDIR) as $pastas) {
	if (is_dir ($pastas)) {
	//echo "Galeria De ";
		$caminho = str_replace ( $dir,"",$pastas);
		echo " <a href=\"$caminho\"/index.php>".str_replace ( $dir,"",$pastas)."</a><br />";
					echo "";
	}
}*/
  $sqlRead = 'SELECT * FROM videos order by id ASC';
  try{
    $read = $db->prepare($sqlRead);
    $read->execute();
  } catch(PDOException $e){
    echo $e->getMessage();
  }
  while($rs = $read->fetch(PDO::FETCH_OBJ)){
    /*print_r($rs);*/
  ?>
    <iframe src="<?=$rs->link?>"
             frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
    </iframe>
  <?=$rs->descricao?>
  <p>&nbsp;</p>
  <?php } ?>
</div>

<?php include "rodape.php";