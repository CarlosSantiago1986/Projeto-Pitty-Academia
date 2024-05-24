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

header('Content-Type: text/html; charset=utf-8');

include 'conexao.php';
//$id_aluno = $_GET['id_aluno'];
$id_exerc = $_GET['id_exerc'];


$sql = "SELECT * FROM exercicios WHERE id_categoria = $id_exerc";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 20%; border: 3px solid black;'>";
    echo "<tr><th>ID</th><th>EXERCICIOS</th><th>AÇÃO</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td style='border: 3px solid black; width: 2%;'>".$row["id_exercicio"]."</td>
        <td style='border: 3px solid black; width: 10%;'>".$row["nome_exercicio"]."</td>
        <td style='border: 3px solid black; width: 5%;'>
        <a href='DELETE_EXERCI_INSTRU.php?id_exercicio=".$row["id_exercicio"]." 'onclick='return confirmDelete();'><button type='button'>EXCLUIR</button></a></td></tr>";

        }
    echo "</table>";
    echo"<br><a href='GERENCIA_EXERC_INSTRU.php?id_aluno=999'><button type='button'>ADD EXERCICIOS</button></a>";
    echo"<br><br><a href='GERENCIA_EXERC_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a>";
} else {
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