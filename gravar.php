<?php

session_start();
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "select * from usuario WHERE email ='".$email."' AND senha = '".$senha."'";

include_once 'conexao.php';

$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
$row = mysqli_fetch_array($rs);
$adm = $row['adm'];

if($adm == 1){
    header('location: artigos.php');
}else{
    header('location: consultauser.php');
}
}else{
    echo "email ou senha incorretos!";

}
mysqli_close($con);   





?>