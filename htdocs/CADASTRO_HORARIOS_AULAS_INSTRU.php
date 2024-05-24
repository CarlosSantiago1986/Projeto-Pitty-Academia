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
        aulas_grupo.id_aula_grup AS id_aula,
        aulas_grupo.nome_aula AS AULA
    FROM aulas_grupo";
    
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 20%; border: 3px solid black;'>";
    echo "<tr><th style='border: 3px solid black;'>ID</th><th style='border: 3px solid black;'>AULA</th><th style='border: 3px solid black;'>AÇÃO</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td style='border: 3px solid black; width: 5%;'>".$row["id_aula"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["AULA"]."</td>
        <td style='border: 3px solid black; width: 5%;'>        
        <a href='CADASTRO_HORARIOS_INSTRU.php?id_aula=".$row["id_aula"]."'><button type='button'>ADD HORARIO</button></a></td></tr>";
        
        }

        echo "</table>";
  //  echo"<br><br><a href='CADASTRO_HORARIOS_AULAS_INSTRU.PHP?id_aluno=".$id_aluno."'>ADD HORARIO</a>  ";
    echo"<br><br><a href='GERENCIA_HORAR_INSTRU.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a>";
}
 else {
    echo "0 resultados";
}

$conn->close();
?>

</button>
</body>
