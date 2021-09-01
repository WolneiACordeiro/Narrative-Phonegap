<?php

include "conexao.php";
	if(isset($_POST['enter']))
	{
			$nome=$_POST['name'];
			$email=$_POST['email'];
			$senha=$_POST['password'];				
		    $q=mysqli_query($con,"INSERT INTO contaUsuario(nomeConta,emailConta,senhaConta) VALUES('$nome','$email','$senha')");
 if($q)
  echo 'success';
else
  echo 'error';
   }
?>
