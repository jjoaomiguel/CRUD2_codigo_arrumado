<?php
// Listagem com erro de lógica (ordem incorreta e falta de conexão)
include("conexao.php");

$sql = "SELECT * FROM usuarios"; // Erro de SQL: FORM ao invés de FROM
$resultado = mysqli_query($conn, $sql);

<a href='cadastrar.php'>Cadastrar novo</a>

while ($linha = mysqli_fetch_array($resultado)) {
    echo "<h1>Lista de Usuários</h1>";
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "Email: " . $linha['email'] . "<br><br>";
}

?>