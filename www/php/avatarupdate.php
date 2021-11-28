
<?php
include("conexao.php");

$arquivo = $_FILES['arquivo'];
$var_id = $_POST["campo_id"];

// Pega extensão da imagem
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

// Gera um nome único para a imagem
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

// Caminho de onde ficará a imagem
$caminho_imagem = "../img/history/users/" . $nome_imagem;

$result = mysqli_query($con," SELECT avatarUsuario FROM contausuario where idConta = '$var_id' ");

$row = mysqli_fetch_array($result);

$imagem_deleta = $row[0];

$file_pointer = "../img/history/users/" . $imagem_deleta;
   
// Use unlink() function to delete a file 

if (!unlink($file_pointer)) { 
    echo ("$file_pointer cannot be deleted due to an error"); 
} 
else { 
    echo ("$file_pointer has been deleted"); 
} 

// Faz o upload da imagem para seu respectivo caminho
move_uploaded_file($arquivo["tmp_name"], $caminho_imagem);

mysqli_query($con," UPDATE contausuario SET avatarUsuario = '$nome_imagem'  WHERE idConta = '$var_id' ");

header("location:../usuarioeu.php?id=$var_id");

?>