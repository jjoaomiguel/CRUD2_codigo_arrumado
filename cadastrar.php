<?php

include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
}
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($conn->query($sql) === true) {
        echo "Usuário cadastrado com sucesso!";
    else
        echo "Erro ao cadastrar!";
}
$conn->close()
?>

<form method="POST" action="cadastrar.php">
    Nome: <input type="text" name="nome"> <label for="name">Nome:</label><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>