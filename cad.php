<?php
include("conexao.php");
$nome = $_POST['nome'];
$data = $_POST['data'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$consulta = ("INSERT INTO cadastro(nome, data, email, senha) 
VALUES('nome','data','email','senha')");
if ($conexao = mysqli_query($conexao, $consulta)) {
    echo "cadastro realizado";
}
else {
    echo "cadastro nao realizado", mysqli_connect_error($conexao);
}
?>