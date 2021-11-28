<?php
include("conexao.php");

$Uid = $_GET["Uid"];
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

mysqli_query($con, "DELETE FROM historia WHERE idHistoria = $id");

header("location:../deletasucesso.php?id=$Uid");

?>
          
     

