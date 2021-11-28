<?php
include "conexao.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
   if(isset($_POST['login']))
    {
        $query_match = mysqli_query($con, "SELECT * FROM contausuario WHERE emailConta='$email' AND senhaConta='$password'");
        $login = mysqli_num_rows($query_match);
        if($login == 1) {
            echo "success";
        } 
        else {
            echo "error";
        }
            
    }
    mysqli_close($con);
?>

