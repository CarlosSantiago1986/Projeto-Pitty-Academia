<?php

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$nivel = $_POST['nivel'];
$observacoes = $_POST['observacoes'];
$login = $_POST['login'];
$senha = $_POST['senha'];

IF ($nome == "")
{
    echo "ERRO, PREENCHER CAMPOS";
    echo "<br><br><a href='MENU_INSTRUTOR.php?id_aluno=999'>Voltar</a><br>";
} 
else{
$sql = "INSERT INTO aluno (nome, sobrenome, sexo, nivel, observacoes, login, senha) VALUES ('$nome', '$sobrenome','$sexo', '$nivel', '$observacoes', '$login' ,'$senha') ";

if ($conn->query($sql) === TRUE) {
    echo "Usuário adicionado com sucesso!";
    echo "<br><br><a href='MENU_INSTRUTOR.php?id_aluno=999'>Voltar</a><br>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    echo "<br><br><a href='MENU_INSTRUTOR.php?id_aluno=999'>Voltar</a><br>";
}
}
$conn->close();
?>
