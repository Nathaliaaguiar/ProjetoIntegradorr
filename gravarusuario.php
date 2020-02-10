<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gravarusuario</title>
</head>
<body>
    <?php
    //pegar dados da tela
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);
        //chamar conexão com o banco
        include_once "conexao.php";

        //instrução pra gravar no banco
        $sql = "insert into usuario (email, senha, id) values ('$email', '$senha', null)";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('Usuário cadastrado!! '); location= './SOBRE.HTML';
            </script>";
}else{
    echo "erro";
}

?>

</body>
</html>