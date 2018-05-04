https://forum.imasters.com.br/topic/437538-mega-tutorial-upload-simples-e-multiplo/
https://forum.imasters.com.br/topic/437538-mega-tutorial-upload-simples-e-multiplo/


<?php
// Nas versões do PHP anteriores a 4.1.0, $HTTP_POST_FILES deve ser utilizado ao invés
// de $_FILES.

$uploaddir = '/home/cabox/workspace/amy/img_upload/';
$uploadfile = $uploaddir . basename($_FILES['fileUpload']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";

?>











if(isset($_FILES['fileUpload']))
	{
		$ext = strtolower(substr($_FILES['fileUpload']['name'],-4));
		$extensoesIMG = array(".zip");
		
		if(in_array($ext, $extensoesIMG)){
      
			try{
				$dir = '/home/cabox/workspace/amy/img_upload/';
				$new_name = $dir . date("Y-m-d H-i-s") . $ext;
				move_uploaded_file($_FILES['fileUpload']['tmp_name'], $new_name);

				echo "<script>alert('Inserido com sucesso!');</script>";
				
			}catch(PDOException $e){
				echo "<div class='alert alert-error'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Erro ao inserir dados!</strong>" . $e->getMessage() . "
				</div>";
			}
      
		} else {
			echo "Não foi inserido uma imagem ou a extensão do arquivo não é suportada. Favor inserir uma imagem com extensão GIF, JPG, JPEG, PNG OU BMP.";
		}
	}