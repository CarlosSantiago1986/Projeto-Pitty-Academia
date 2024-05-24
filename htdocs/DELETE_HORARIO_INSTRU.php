<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitty</title>
    <style>
        body {
            background-color:orangered;
            color: black;
           
        }
       
    </style>
</head>
<body>

<?php

include 'conexao.php';



$id_aluno = $_GET['id_aluno'];



$sql = "DELETE FROM horarios WHERE id_horarios =$id_aluno";



if ($conn->query($sql) === TRUE) {

    echo "Horario excluído com sucesso!";

    echo "<br><br><a href='GERENCIA_HORAR_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";

} else {

    echo "Erro ao excluir usuário: " . $conn->error;

    echo "<br><br><a href='GERENCIA_HORAR_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";

}



$conn->close();

?>
</body>
