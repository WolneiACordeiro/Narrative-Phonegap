<?php
include "conexao.php";

	$nome=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $default_avatar = '../img/history/users/user_default.jpg';
    $destination = "../img/history/users/";

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $randstring = generateRandomString();

    $new_avatar = trim($randstring .'.jpg');

    touch($destination . $new_avatar);
      
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM contaUsuario WHERE emailConta ='$email'"));
        if($register == 0)
        {
            copy($default_avatar, $destination.$new_avatar);
            
            $insert = mysqli_query($con,"INSERT INTO contaUsuario (nomeConta, emailConta, senhaConta, avatarUsuario) VALUES('$nome','$email','$password', '$new_avatar')");
            if($insert) {
				header("location:../contasucesso.html");
			}
            else {
				echo "error";
			}   
        }
        else if($register != 0) {
			header("location:../main.php");
		}
            
?>


