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
    // Foco em emagrecimento treino 2
    $sql = "INSERT INTO treinos (id_aluno, id_exercicio, series, repeticoes, ordem, classe_treino)
    VALUE
    ('$id_aluno',209,'4','12',1,'A'),
    ('$id_aluno',207,'4','12',2,'A'),
    ('$id_aluno',6,'3','12',3,'A'),
    ('$id_aluno',208,'4','12',4,'A'),
    ('$id_aluno',210,'4','8',5,'A'),
    ('$id_aluno',38,'4','8',6,'A'),
    ('$id_aluno',213,'4','8',7,'A'),
	('$id_aluno',40,'4','10',8,'A'),
    ('$id_aluno',47,'4','10/15Min',0,'A'),
	('$id_aluno',21,'4','15',1,'F'),
    ('$id_aluno',20,'10','10',2,'F'),
    ('$id_aluno',214,'4','12',3,'F'),
    ('$id_aluno',215,'4','15',4,'F'),
    ('$id_aluno',216,'4','10',5,'F'),
    ('$id_aluno',29,'4','8',6,'F'),
    ('$id_aluno',30,'4','20',7,'F'),
    ('$id_aluno',196,'4','10',8,'F'),
    ('$id_aluno',217,'4','15',9,'F'),
    ('$id_aluno',47,'4','10/15Min',0,'F'),
	('$id_aluno',72,'4','12',1,'B'),
    ('$id_aluno',201,'4','12',2,'B'),
    ('$id_aluno',220,'4','12',3,'B'),
    ('$id_aluno',219,'4','12',4,'B'),
    ('$id_aluno',221,'4','8',5,'B'),
    ('$id_aluno',15,'4','8',6,'B'),
    ('$id_aluno',222,'4','8',7,'B'),
    ('$id_aluno',47,'-','10/15Min',0,'B'),
	('$id_aluno',223,'-','-',1,'S'),
    ('$id_aluno',224,'4','30',2,'S'),
    ('$id_aluno',225,'4','10',3,'S'),
    ('$id_aluno',64,'4','1,5Min',4,'S'),
    ('$id_aluno',40,'4','8',5,'S'),
	('$id_aluno',41,'4','20',6,'S'),
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
