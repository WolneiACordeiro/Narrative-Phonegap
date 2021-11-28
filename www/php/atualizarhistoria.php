<?php
include("conexao.php");

    if(isset($_POST['insert']))
    {
		$var_id = $_POST['usuarioId'];
		$tituloSave = $_POST['tituloSave'];
        $localSave = $_POST['localSave'];
        $cidadeSave = $_POST['cidadeSave'];
		$estadoSave = $_POST['estadoSave'];
        $dataSave = $_POST['dataSave'];
        $horaSave = $_POST['horaSave']; 
		$tagUm = $_POST['tagUm'];
		$tagDois = $_POST['tagDois'];
        $latLocal = $_POST['latLocal'];
        $longLocal = $_POST['longLocal'];
        $postId = $_POST['postId']; 
		$historiaTexto = $_POST['historiaTexto'];

		   $insert = mysqli_query($con, "UPDATE historia SET tituloHistoria = '$tituloSave', localHistoria = '$localSave', cidadeHistoria = '$cidadeSave', estadoHistoria = '$estadoSave', dataHistoria = '$dataSave', horaHistoria = '$horaSave', tagUm = '$tagUm', tagDois = '$tagDois', textoHistoria = '$historiaTexto', latH = '$latLocal', longH = '$longLocal' WHERE idHistoria = $postId");

                           if($insert)
						   {					 		
					        echo 'success';
							   }
                           else
						   {
       						   echo 'error';   
						    }
                    }

			$arquivo = $_FILES['file'];
			$id = $_GET["id"]; 

			$result = mysqli_query($con," SELECT foto FROM historia where idHistoria = $id ");

			$row = mysqli_fetch_array($result);

			$imagem_deleta = $row[0];

			$file_pointer = "../img/history/views/" . $imagem_deleta;
			
			// Use unlink() function to delete a file 

			if (!unlink($file_pointer)) { 
				echo ("$file_pointer cannot be deleted due to an error"); 
			} 
			else { 
				echo ("$file_pointer has been deleted"); 
			} 

			$filetype=$arquivo['type'];
			if($filetype=='image/pjpeg' || $filetype=='image/PJPEG' || $filetype=='image/jpeg' || $filetype=='image/JPEG' || $filetype=='image/jpg' || $filetype=='image/png' || $filetype=='image/PNG' || $filetype=='image/gif' || $filetype=='image/GIF' || $filetype=='image/bmp' || $filetype=='image/BMP'){
					if ($arquivo['size']>10000000000000000000){
					exit('Arquivo muito grande. Tamanho máximo permitido 500kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  
					}
					$novonome = md5(mt_rand(1,10000).$arquivo['name']).'.jpg';
					$dir = "../img/history/views/";
					if (!file_exists($dir)){
					mkdir($dir, 0755);  
					}
					$caminho = $dir.$novonome;
				$insere = mysqli_query($con, "UPDATE historia SET foto ='$novonome' WHERE idHistoria = $id ORDER BY idHistoria DESC limit 1");
				if ($insere){
					move_uploaded_file($_FILES['file']['tmp_name'],$caminho);
					echo "<script>alert('Imagem Inserida com sucesso!!');</script>"; 
					}else{
						echo "<script>alert('Não foi possível inserir a imagem!!');</script>";
				}
			}     
		
?>  
          
     

