<?php
$host = "localhost";
$user = "ragnarok";
$pass = "ragnarok";
$db = "meu_jogo";

$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
