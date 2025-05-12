<?php
require_once 'includes/db.php';

// Dados do utilizador administrador
$nome = 'Administrador';
$email = 'admin@restaurante.com';
$senha = 'admin123'; // Senha do administrador
$tipo = 'admin'; // Tipo do utilizador (admin)

// Encriptando a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Inserindo o administrador na tabela 'users'
$stmt = $pdo->prepare("INSERT INTO users (nome, email, senha, tipo) VALUES (?, ?, ?, ?)");
$stmt->execute([$nome, $email, $senha_hash, $tipo]);

echo "Administrador criado com sucesso!";
?>
