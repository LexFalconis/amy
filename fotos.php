<?php include "topo.php"; ?>
<div class="fotos">
  <h1>Fotinhas, ebaaaa...</h1>
  <h2>...Quando papai e mamãe quiserem só jogar umas fotinhas novas pra galera, elas estarão aqui nessa página :-)</h2>
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

 $caminho = "/home/cabox/workspace/amy/up/uploads/thumbs/";
        $img = glob($caminho."*.{jpeg,JPG,jpg,png,gif}", GLOB_BRACE);
        $contador = count($img);

foreach($img as $img){
  $img_exib = str_replace("/home/cabox/workspace/amy/","",$img);
  echo '<a href="ver.php?loc='.str_replace("up/uploads/thumbs/","up/uploads/",$img_exib).'"><img src="'.$img_exib.'" /></a>';
}
  /*$caminho = "/home/cabox/workspace/amy/fotos/img_upload/";
  $img = glob($caminho."*.{jpg,png,gif}", GLOB_BRACE);
  $contador = count($img);
  foreach($img as $img){
    echo '<a href=""><img src="'.$img.'" width="50px" /></a>';
  }*/

?>
  
  <p>
    <!--texto...-->
  </p>
</div>

<?php include "rodape.php";