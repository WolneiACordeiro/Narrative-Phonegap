<?php
    include "conexao.php";
    $email   = $_REQUEST['email'];
    $password  = $_REQUEST['password'];

	
$data=array();
        $login =mysqli_query($con, "SELECT * FROM  contaUsuario   WHERE   emailConta='$email'   AND   senhaConta='$password'");
     while ($row=mysqli_fetch_object($login)){
 $data[]=$row;
 
}
echo json_encode($data);
?>

