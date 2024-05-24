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


$sql_check = "SELECT id_aluno FROM aluno WHERE id_aluno = '$id_aluno'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    echo "Erro: O ID da aluno não existe na tabela de alunos!";
    echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'>Voltar</a><br>";
} else {
    // Insere os dados na tabela treino
    // Foco em Perna intermediário hipertrofia
    $sql = "INSERT INTO treinos (id_aluno, id_exercicio, series, repeticoes, ordem, classe_treino)
    VALUE
    ('$id_aluno',1,'3','10',1,'A'),
    ('$id_aluno',8,'3','10',2,'A'),
    ('$id_aluno',6,'3','10',3,'A'),
    ('$id_aluno',15,'4','10',4,'A'),
    ('$id_aluno',221,'4','10',5,'A'),
    ('$id_aluno',13,'4','10',6,'A'),
    ('$id_aluno',40,'4','10',7,'A'),
    ('$id_aluno',47,'4','10/15Min',0,'A'),
    ('$id_aluno',21,'4','4',1,'F'),
    ('$id_aluno',20,'5','20',2,'F'),
    ('$id_aluno',192,'4','9',3,'F'),
    ('$id_aluno',193,'4','15',4,'F'),
    ('$id_aluno',194,'4','15',5,'F'),
    ('$id_aluno',195,'3','1min',6,'F'),
    ('$id_aluno',30,'4','20',7,'F'),
    ('$id_aluno',196,'4','10',8,'F'),
    ('$id_aluno',199,'4','10-lento',8,'F'),
    ('$id_aluno',47,'4','10/15Min',0,'F'),
    ('$id_aluno',66,'4','10',1,'B'),
    ('$id_aluno',201,'3','10',2,'B'),
    ('$id_aluno',202,'3','10',3,'B'),
    ('$id_aluno',203,'4','10',4,'B'),
    ('$id_aluno',33,'4','10',5,'B'),
    ('$id_aluno',210,'4','10',6,'B'),
    ('$id_aluno',38,'4','10',7,'B'),
    ('$id_aluno',47,'-','10/15Min',0,'B'),
    ('$id_aluno',78,'-','-',1,'S'),
    ('$id_aluno',60,'-','-',2,'S'),
    ('$id_aluno',40,'4','20',2,'S'),
    ('$id_aluno',42,'4','20',2,'S'),
    ('$id_aluno',41,'4','20',2,'S'),
    ('$id_aluno',47,'-','10/15Min',0,'S');";


    if ($conn->query($sql) === TRUE) {
        echo "Treino adicionado com sucesso!";
        echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR MENU</button></a><br>";
    } else {
        echo "Erro ao adicionar Treino: " . $conn->error;
        echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR MENU</button></a><br>";
    }
}

$conn->close();
?>


</body>