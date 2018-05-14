<html>
	<form method='post' enctype='multipart/form-data'><br><input type="hidden" name="MAX_FILE_SIZE" value="104857600">
   <input type="hidden" name="max_input_time" value="1000000">
   <input type="hidden" name="memory_limit" value="10737418240">
   <input type="hidden" name="post_max_size" value="10737418240">
   <input type="hidden" name="upload_max_filesize" value="10737418240">
		<input type='file' name='foto[]' value='Cadastrar foto'  multiple="multiple">
		<input type='submit' name='submit'>
	</form>
	<?php			
		
					
			if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){
        $arquivo['name'] = $_FILES['foto'];
        for ($k = 0; $k < count($arquivo['name']); $k++)
					{
          include "Upload.class.php";
          $arquivo['name'] = $arquivo['name'][$k];
          $upload = new Upload($arquivo['name'], 1920, 1080, "/home/cabox/workspace/amy/up/fotos/");
					echo $upload->salvar();
					}		
				
			}
		?>
	</body>
</html>