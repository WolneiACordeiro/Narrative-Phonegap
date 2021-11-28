<?php
include("conexao.php");

    if(isset($_POST['insert']))

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
	
    {

		   $insert = mysqli_query($con, "INSERT INTO historia (tituloHistoria, localHistoria, cidadeHistoria, estadoHistoria, dataHistoria, horaHistoria, tagUm, tagDois, textoHistoria, idUsuarioHistoria, latH, longH, favoritos) VALUES ('$tituloSave', '$localSave', '$cidadeSave',  '$estadoSave', '$dataSave', '$horaSave', '$tagUm', '$tagDois', '$historiaTexto', '$postId', '$latLocal', '$longLocal', 0)");

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
						$insere = mysqli_query($con, "UPDATE historia SET foto ='$novonome' ORDER BY idHistoria DESC limit 1");
						if ($insere){
							move_uploaded_file($_FILES['file']['tmp_name'],$caminho);
							echo "<script>alert('Imagem Inserida com sucesso!!');</script>"; 
						 }else{
							  echo "<script>alert('Não foi possível inserir a imagem!!');</script>";
						}
					}            

?>  
          
     

