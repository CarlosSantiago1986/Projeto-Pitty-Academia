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
    // Foco em emagrecimento treino 1
    $sql = "INSERT INTO treinos (id_aluno, id_exercicio, series, repeticoes, ordem, classe_treino)
    VALUE
    ('$id_aluno',7,'4','10',2,'A'),
    ('$id_aluno',79,'4','10',1,'A'),
    ('$id_aluno',4,'4','10',3,'A'),
    ('$id_aluno',57,'4','10',4,'A'),
    ('$id_aluno',56,'4','10',5,'A'),
    ('$id_aluno',40,'4','10',6,'A'),
    ('$id_aluno',47,'-','15/20Min',0,'A'),
    ('$id_aluno',33,'4','10',7,'A'),
    ('$id_aluno',210,'4','10',8,'A'),
    ('$id_aluno',38,'4','10',9,'A'),
    ('$id_aluno',21,'4','20',1,'F'),
    ('$id_aluno',20,'4','20',2,'F'),
    ('$id_aluno',192,'4','15/20',3,'F'),
    ('$id_aluno',23,'4','15',4,'F'),
    ('$id_aluno',204,'4','20',5,'F'),
    ('$id_aluno',28,'4','20',6,'F'),
    ('$id_aluno',30,'4','20',7,'F'),
    ('$id_aluno',47,'-','15/20Min',0,'F'),
    ('$id_aluno',205,'4','10',1,'B'),
    ('$id_aluno',206,'4','10',2,'B'),
    ('$id_aluno',69,'4','10',3,'B'),
    ('$id_aluno',73,'4','10',4,'B'),
    ('$id_aluno',11,'4','15',5,'B'),
    ('$id_aluno',15,'4','15',5,'B'),
    ('$id_aluno',47,'-','15/20Min',0,'B'),
    ('$id_aluno',61,'4','15',1,'S'),
    ('$id_aluno',60,'4','15',2,'S'),
    ('$id_aluno',64,'4','1Min',3,'S'),
    ('$id_aluno',65,'4','15',4,'S'),
    ('$id_aluno',40,'4','20',5,'S'),
    ('$id_aluno',41,'4','15',6,'S'),
    ('$id_aluno',47,'-','15/20Min',0,'S');";

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
