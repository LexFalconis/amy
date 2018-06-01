<?php
session_start();
if($_SESSION["acesso"]<>"1"){
  header( "Location:home.php" );
}
include "topo.php";
?>
<div class="backupload">
  <div class="upload">
    <h3>Envio de fotos</h3>
    <form id="" action="up/upload.php" method="post" enctype="multipart/form-data">
      <label>Imagens jpg,png,gif preferencialmente</label><br />
      <input type="hidden" name="MAX_FILE_SIZE" value="104857600">
      <input type="hidden" name="max_input_time" value="1000000">
      <input type="hidden" name="memory_limit" value="10737418240">
      <input type="hidden" name="post_max_size" value="10737418240">
      <input type="hidden" name="upload_max_filesize" value="10737418240">

      <input type="file" name="upload_images[]" id="image_file" multiple="multiple"><br />

      <input type="submit" value="Enviar fotos"/> 
    </form>
  </div>

  <div class="upload">
    <h3>Envio de Video</h3>
    <form id="" action="up/uploadV.php" method="post" enctype="multipart/form-data">
      <label>Envie primeiro um video para o youtube, depois insira aqui os dados dele</label><br />
      Link <br /><input type="text" name="link" placeholder="Digite aqui o endereço do video do youtube..." /><br />
      Descrição <br /><input type="text" name="descricao" placeholder="Coloque aqui uma pequena descrição para o video..." /><br /><br />
      Video já estará ativo no site ?<br />
      <input type="radio" name="status" value="1" />Sim&nbsp;&nbsp;&nbsp;
      <input type="radio" name="status" value="2" />Não<br /><br />
      Quem poderá ver o video aqui ?<br />
      <input type="radio" name="permissao" Value="1" />Todos podem ver &nbsp;&nbsp;&nbsp;
      <input type="radio" name="permissao" Value="2" />Apenas familia<br />

      <input type="submit" value="Cadastrar video"/> 
    </form>
  </div>
</div>
<?php
include "rodape.php";