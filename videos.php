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
  $sqlRead = 'SELECT * FROM videos order by id DESC';
  try{
    $read = $db->prepare($sqlRead);
    $read->execute();
  } catch(PDOException $e){
    echo $e->getMessage();
  }
  echo "<p>&nbsp;</p>";
  while($rs = $read->fetch(PDO::FETCH_OBJ)){
    /*print_r($rs);*/
    if($_SESSION["acesso"]=="1"){
      echo "<a href='up/delV.php?idv=" . $rs->id . "'>Deletar Video</a><br />";
    }
  ?>
    <iframe src="<?php
    if ($link=str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/",$rs->link)){
      echo $link;
    } else {
      echo $rs->link;
    }?>"
             frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
    </iframe><br />
  <?=$rs->descricao?>
  <p>&nbsp;</p>
  <center><hr></center>
  <p>&nbsp;</p>
  <?php } ?>
</div>

<?php include "rodape.php";