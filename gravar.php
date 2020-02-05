<?php

session_start();
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$sql = "select * from usuario WHERE email ='".$email."' AND senha = '".$senha."'";

include_once 'conexao.php';

$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
$row = mysqli_fetch_array($rs);
$adm = $row['adm'];

if($adm == 1){
    header('location: artigo.php');
}else{
    header('location: consultauser.php');
}
}
mysqli_close($con);   





?>