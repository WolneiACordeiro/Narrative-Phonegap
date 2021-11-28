<?php
include "conexao.php";

	$nome=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

      
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM contaUsuario WHERE emailConta ='$email'"));
        if($register == 0)
        {
            $insert = mysqli_query($con,"INSERT INTO contaUsuario (nomeConta, emailConta, senhaConta) VALUES('$nome','$email','$password')");
            if($insert) {
				header("location:../index.php");
			}
            else {
				echo "error";
			}   
        }
        else if($register != 0) {
			header("location:../historico.php");
		}
            
?>


