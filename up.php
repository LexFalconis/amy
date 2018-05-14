<?php
session_start();
if($_SESSION["acesso"]<>"1"){
  header( "Location:home.php" );
}
include "topo.php";
?>
 <!--script type="text/javascript">
  function compressImage(file, MAX_WIDTH, MAX_HEIGHT, format, response) {
      var img = document.createElement("img");

      var reader = new FileReader();    
      reader.onload = function(e) {
          img.src = e.target.result;

          var canvas = document.createElement("canvas");
          var ctx = canvas.getContext("2d");

          var width  = img.width;
          var height = img.height;

          if (width > height) {
              if (width > MAX_WIDTH) {
                  height *= MAX_WIDTH / width;
                  width = MAX_WIDTH;
              }
          } else if (height > MAX_HEIGHT) {
              width *= MAX_HEIGHT / height;
              height = MAX_HEIGHT;
          }

          canvas.width = width;
          canvas.height = height;

          ctx.drawImage(img, 0, 0, width, height);

          response(
              canvas.toDataURL("fotos/" + format).replace(/^data[:]image\/(.*);base64,/, "")
          );
      };
      reader.readAsDataURL(file);
  }

  function uploadAjax(data, fileName, success, error)
  {
      var oReq = new XMLHttpRequest();

      oReq.open("POST", "upload.php?filename=" + fileName, true);
      oReq.onreadystatechange = function() {
          if (oReq.readyState === 4) {
              if (oReq.status === 200) {
                  success(oReq.responseText);
              } else {
                  error(oReq.status);
              }
          }
      };
      oReq.send(data);
  }

  function enviar() {
      var filesToUpload = document.getElementById('input').files;

      //Gerar imagem com tamanho normal
      compressImage(filesToUpload[0], 800, 600, "jpeg", function(resource) {
          uploadAjax(resource, filesToUpload[0].name, function(response) {
              if (response === "OK") {
                  alert("sucesso");
              } else {
                  alert("Ajax: " + response);
              }
          }, function(errStatus) {
              alert("erro: " + errStatus);
          });
      });

      //Gerar imagem com thumb
      compressImage(filesToUpload[0], 150, 150, "jpeg", function(resource) {
          uploadAjax(resource, filesToUpload[0].name.replace(/\.([a-zA-Z0-9]+)$/, "_thumb.$1"), function(response) {
              if (response === "OK") {
                  alert("sucesso");
              } else {
                  alert("Ajax: " + response);
              }
          }, function(errStatus) {
              alert("erro: " + errStatus);
          });
      });
  }
  </script>

  <p>
      <input type="file" value="" id="input">
      <input type="button" value="Enviar" id="send">
  </p>

  <script type="text/javascript">
  document.getElementById('send').onclick = enviar;
  </script-->




<div class="upload">
 <form id="" action="upload.php" method="post" enctype="multipart/form-data">
    
      <label>Imagens jpg,png,gif preferencialmente</label><br />
      <input type="hidden" name="MAX_FILE_SIZE" value="104857600">
   <input type="hidden" name="max_input_time" value="1000000">
   <input type="hidden" name="memory_limit" value="10737418240">
   <input type="hidden" name="post_max_size" value="10737418240">
   <input type="hidden" name="upload_max_filesize" value="10737418240">
  
      <input type="file" name="arquivo[]" multiple="multiple" /><br />
    <input type="submit" value="Cadastrar"/> 
  </form>
</div>


 max_input_time = 9000
memory_limit = 1073741824
post_max_size = 1073741824
file_uploads = On
upload_max_filesize = 1073741824
max_file_uploads = 100
allow_url_fopen = On