<?php
session_start();
if($_SESSION["acesso"]<>"1"){
  header( "Location:home.php" );
}
include "topo.php";
?>
<div class="upload">
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
  <form id="" action="up/uploadV.php" method="post" enctype="multipart/form-data">
    <label>Envie primeiro um video para o youtube, depois insira aqui os dados dele</label><br />
    <input type="text" name="link" placeholder="Digite aqui o endereço do video do youtube..." /><br />
    <input type="text" name="descricao" placeholder="Coloque aqui uma pequena descrição para o video..." /><br />
    Video já estará ativo no site ?<br />
    <input type="radio" name="status" value="1" />Sim&nbsp;&nbsp;&nbsp;
    <input type="radio" name="status" value="2" />Não<br /><br />
    Quem poderá ver o video aqui ?<br />
    <input type="radio" name="permissao" Value="1" />Todos podem ver &nbsp;&nbsp;&nbsp;
    <input type="radio" name="permissao" Value="2" />Apenas familia<br /><br />

    <input type="submit" value="Cadastrar video"/> 
  </form>
</div>


 max_input_time = 9000
memory_limit = 1073741824
post_max_size = 1073741824
file_uploads = On
upload_max_filesize = 1073741824
max_file_uploads = 100
allow_url_fopen = On

<?php
include "rodape.php";