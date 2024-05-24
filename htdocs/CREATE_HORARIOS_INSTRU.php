<?php
include 'conexao.php';

$id_aula = $_POST['id_aula'];
$hr_seg = $_POST['segunda'];
$hr_terca = $_POST['terca'];
$hr_quarta = $_POST['quarta'];
$hr_quinta = $_POST['quinta'];
$hr_sexta = $_POST['sexta'];
$hr_sabado = $_POST['sabado'];
$hr_domingo = $_POST['domingo'];

// Verifica se o valor de id_aula é válido

$sql_check = "SELECT id_aula_grup FROM aulas_grupo WHERE id_aula_grup = '$id_aula'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    echo "Erro: O ID da aula não existe na tabela de aulas!";
    echo "<br><br><a href='CADASTRO_HORARIOS_INSTRU.html?id_aluno=999'>Voltar</a><br>";
} else {
    // Insere os dados na tabela horarios
    $sql = "INSERT INTO horarios (id_aula_grup, hr_seg, hr_terca, hr_quarta, hr_quinta, hr_sexta, hr_sabado, hr_domingo) 
            VALUES ('$id_aula', '$hr_seg', '$hr_terca', '$hr_quarta', '$hr_quinta', '$hr_sexta', '$hr_sabado', '$hr_domingo')";

    if ($conn->query($sql) === TRUE) {
        echo "Horario adicionado com sucesso!";
        echo "<br><br><a href='GERENCIA_HORAR_INSTRU.php?id_aluno=999'>Voltar</a><br>";
    } else {
        echo "Erro ao adicionar horario: " . $conn->error;
        echo "<br><br><a href='GERENCIA_HORAR_INSTRU.php?id_aluno=999'>Voltar</a><br>";
    }
}

$conn->close();
?>
