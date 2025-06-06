<?php
$host = "localhost";
$usuario = "root"; // ou seu usuário do MySQL
$senha = "";       // ou sua senha do MySQL
$banco = "lispector_cafe";

// Criar conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

//Isso  aqui vai verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
