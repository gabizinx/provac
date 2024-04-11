<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "provac";
if ($conexao = mysqli_connect($host, $user, $senha, $banco)){
   // echo"conexao realizada com sucesso";
}
else{
   // echo "erro na conexao";
}
?>