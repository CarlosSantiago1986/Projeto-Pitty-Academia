<?php
include 'conexao.php';

$id_aluno = $_GET['id_aluno'];

$sql = "DELETE FROM medidas WHERE id_aluno = $id_aluno;
        DELETE FROM aluno WHERE id_aluno=$id_aluno";

if ($conn->multi_query($sql) === TRUE) {
    echo "Usuário excluído com sucesso!";
    echo "<br><br><a href='MENU_INSTRUTOR.php?id_aluno=999'>Voltar</a><br>";
} else {
    echo "Erro ao excluir usuário: " . $conn->error;
    echo "<br><br><a href='MENU_INSTRUTOR.php?id_aluno=999'>Voltar</a><br>";
}

$conn->close();
?>
