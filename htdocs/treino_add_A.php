<?php
include 'conexao.php';

$id_aluno = $_GET['id_aluno'];

//$sql_id = "";
//$result_id = $conn->query($result_id);

$sql_check = "SELECT id_aluno FROM aluno WHERE id_aluno = '$id_aluno'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    echo "Erro: O ID da aluno não existe na tabela de alunos!";
    echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
} else {
    // Insere os dados na tabela treino
    //FOCO EM PERNA INICIANTE HIPERTROFIA
    $sql = "INSERT INTO treinos (id_aluno, id_exercicio, series, repeticoes, ordem, classe_treino)
    VALUE
    ('$id_aluno',1,'4','10',1,'A'),
    ('$id_aluno',79,'4','10',2,'A'),
    ('$id_aluno',4,'4','10',3,'A'),
    ('$id_aluno',10,'4','10',4,'A'),
    ('$id_aluno',12,'4','10',5,'A'),
    ('$id_aluno',13,'4','10',6,'A'),
    ('$id_aluno',40,'4','10',7,'A'),
    ('$id_aluno',47,'-','10/15Min',0,'A'),
    ('$id_aluno',21,'4','15',1,'F'),
    ('$id_aluno',20,'2','10',2,'F'),
    ('$id_aluno',19,'4','10',3,'F'),
    ('$id_aluno',23,'4','10',4,'F'),
    ('$id_aluno',24,'4','20',5,'F'),
    ('$id_aluno',25,'4','20',6,'F'),
    ('$id_aluno',30,'4','20',7,'F'),
    ('$id_aluno',190,'4','15',8,'F'),
    ('$id_aluno',47,'-','10/15Min',0,'F'),
    ('$id_aluno',66,'4','10',1,'B'),
    ('$id_aluno',67,'4','10',2,'B'),
    ('$id_aluno',69,'4','10',3,'B'),
    ('$id_aluno',31,'4','10',4,'B'),
    ('$id_aluno',191,'4','10',5,'B'),
    ('$id_aluno',34,'4','10',6,'B'),
    ('$id_aluno',47,'-','10/15Min',0,'B'),
    ('$id_aluno',78,'-','-',1,'S'),
    ('$id_aluno',60,'-','-',2,'S'),
    ('$id_aluno',47,'-','10/15Min',0,'S');";


    if ($conn->query($sql) === TRUE) {
        echo "Treino adicionado com sucesso!";
        echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
    } else {
        echo "Erro ao adicionar Treino: " . $conn->error;
        echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
    }
}

$conn->close();
?>
