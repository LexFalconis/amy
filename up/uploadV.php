<a href="javascript:window.history.go(-1)" class="voltar">Voltar para página anterior...</a><br />
<p>
  &nbsp;
</p>
<?php include"../chk_login.php";
include"../conn.php";
if($_POST){
  $link = $_POST["link"];
  $descricao = $_POST["descricao"];
  $status = $_POST["status"];
  $permissao = $_POST["permissao"];
  $sql = 'INSERT INTO videos (LINK, DESCRICAO, STATUS, VER_PERMISS)';
  $sql .= 'VALUES (:link, :descricao, :status, :permissao)';
  
  try{
    $create = $db->prepare($sql);
    $create->bindValue(':link', $link, PDO::PARAM_STR);
    $create->bindValue(':descricao', $descricao, PDO::PARAM_STR);
    $create->bindValue(':status', $status, PDO::PARAM_INT);
    $create->bindValue(':permissao', $permissao, PDO::PARAM_INT);
    if($create->execute()){
      echo "<script>alert('Inserido com sucesso!');</script>";
      exit();
    }
  }catch(PDOException $e){
    echo $e->getMessage();
    exit();
  }
} else {
  echo "sem post";
  header("refresh:3;url=../videos.php");
}
 /*Textos completos 	id 	link 	descricao 	status 	ver_permiss