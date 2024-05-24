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
     aluno.id_aluno,
     aluno.nome,
     aluno.sobrenome,
     aluno.sexo,
     aluno.nivel
     FROM aluno";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 90%; border: 1px solid black;'>";
    echo "<tr style='border: 3px solid black;'>";
    echo "<th style='border: 3px solid black;'>ID</th>";
    echo "<th style='border: 3px solid black;'>Nome</th>";
    echo "<th style='border: 3px solid black;'>Sobrenome</th>";
    echo "<th style='border: 3px solid black;'>Sexo</th>";
    echo "<th style='border: 3px solid black;'>Nivel</th>";
    echo "<th style='border: 3px solid black;'>Ações</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td style='border: 3px solid black;'>".$row["id_aluno"]."</td>
        <td style='border: 3px solid black;'>".$row["nome"]."</td>
        <td style='border: 3px solid black;'>".$row["sobrenome"]."</td>
        <td style='border: 3px solid black;'>".$row["sexo"]."</td>
        <td style='border: 3px solid black;'>".$row["nivel"]."</td>
        <td style='border: 3px solid black;width: 35%;'>
        <a href='medidas_instrutor.php?id_aluno=".$row["id_aluno"]."'><button type='button'>MEDIDAS</button></a> |
         <a href='CADASTRO_MEDIDAS_INSTRU.php?id_aluno=".$row["id_aluno"]."'><button type='button'>ADD MEDIDAS</button></a> |
          <a href='MENU_ADD_TREINO.php?id_aluno=".$row["id_aluno"]."'><button type='button'>ADD TREINO</button></a> |
          <a href='treino_delet_all.php?id_aluno=".$row["id_aluno"]."'onclick='return confirmDelete();'><button type='button'>EXCLUIR TREINO</button></a> |

           <a href='delete.php?id_aluno=".$row["id_aluno"]."'onclick='return confirmDelete();'><button type='button'>EXCLUIR ALUNO</button></a></td></tr>";
    }
    echo "</table>";
    echo "<br><br><a href='CADASTRO_ALUN.html?id_aluno=".$id_aluno."'><button type='button'>ADICIONAR ALUNO</button></a>";
    echo "<br><br><a href='MENU_INSTRUTOR.php?id_aluno=999'><button type='button'>VOLTAR MENU</button></a>";
} else {
    echo "0 resultados";
}

$conn->close();
?>

<script>
// Função de confirmação antes de excluir
function confirmDelete() {
    return confirm("Tem certeza que deseja excluir este exercício?");
}
</script>

</body>