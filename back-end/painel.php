<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Painel do Usuário</title>
</head>
<body>
  <h1>Olá, <?php echo $_SESSION['usuario_nome']; ?>! Bem-vindo ao seu painel.</h1>
  <a href="logout.php">Sair</a>
</body>
</html>
