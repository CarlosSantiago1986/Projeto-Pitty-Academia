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


$sql = "SELECT 
    horarios.id_horarios AS ID,
    aulas_grupo.id_aula_grup AS ID2,
    aulas_grupo.nome_aula AS AULA,
    horarios.hr_seg as SEGUNDA,
    horarios.hr_terca AS TERCA,
    horarios.hr_quarta AS QUARTA,
    horarios.hr_quinta AS QUINTA,
    horarios.hr_sexta AS SEXTA,
    horarios.hr_sabado AS SABADO,
    horarios.hr_domingo AS DOMINGO
    FROM horarios
    JOIN aulas_grupo 
    ON  horarios.id_aula_grup = aulas_grupo.id_aula_grup
    order by aulas_grupo.id_aula_grup asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 40%; border: 3px solid black;'>";
    echo "<tr><th style='border: 3px solid black; width: 10%;'>ID</th><th style='border: 3px solid black; width: 10%;'>AULA</th><th style='border: 3px solid black; width: 10%;'>SEGUNDA</th><th style='border: 3px solid black; width: 10%;'>TERÇA</th><th style='border: 3px solid black; width: 10%;'>QUARTA</th><th style='border: 3px solid black; width: 10%;'>QUINTA</th><th style='border: 3px solid black; width: 10%;'>SEXTA</th><th style='border: 3px solid black; width: 10%;'>SÁBADO</th><th style='border: 3px solid black; width: 10%;'>DOMINGO</th><th style='border: 3px solid black; width: 10%;'>AÇÃO</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td style='border: 3px solid black; width: 10%;'>".$row["ID"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["AULA"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["SEGUNDA"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["TERCA"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["QUARTA"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["QUINTA"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["SEXTA"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["SABADO"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["DOMINGO"]."</td>
        <td style='border: 3px solid black; width: 10%;'>
        <a href='DELETE_HORARIO_INSTRU.php?id_aluno=".$row["ID"]."'onclick='return confirmDelete();'><button type='button'>EXCLUIR</button></a></td></tr>";
        
        }

        $row2 = $result->fetch_assoc();
    echo "</table>";
    echo"<br><br><a href='CADASTRO_HORARIOS_AULAS_INSTRU.php?id_aluno=".$id_aluno."'><button type='button'>ADD HORARIO</button></a>  ";
    echo"<br><br><a href='MENU_INSTRUTOR.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a>";
}
 else {
    echo "0 resultados";
}

$conn->close();
?>

<script>
// Função para exibir um diálogo de confirmação antes de excluir
function confirmDelete() {
    return confirm("Tem certeza que deseja excluir este exercício?");
}
</script>

</body>
