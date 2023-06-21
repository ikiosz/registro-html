<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $login = $_POST["login"];
    $nascimento = $_POST["nascimento"];

    // Valide os dados do formulário (você pode adicionar validações adicionais aqui)

    // Insira os dados da conta no banco de dados
    $sql = "INSERT INTO contas (email, senha, login, nascimento) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $email, $senha, $login, $nascimento);

    if ($stmt->execute()) {
        // Conta criada com sucesso
        echo '<div class="success">Conta criada com sucesso!</div>';
    } else {
        // Erro ao criar a conta
        echo '<div class="error">Erro ao criar a conta: ' . $stmt->error . '</div>';
    }

    $stmt->close();
}

$conn->close();
?>
