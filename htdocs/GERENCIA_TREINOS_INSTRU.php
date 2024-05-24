<?php
include 'conexao.php';
$id_aluno = $_GET['id_aluno'];

// Recuperar os nomes dos exercícios do banco de dados
$sql = "
    SELECT 
        nome_exercicio
     FROM exercicios 
     WHERE id_categoria IN (2, 7, 4);";


$result = $conn->query($sql);

// Armazenar os nomes dos exercícios em um array
$exercicios = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $exercicios[] = $row['nome_exercicio'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Auto Complete em PHP</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
    $(function() {
        // Ativar o autocomplete para o campo de entrada com o ID 'nome_exercicio'
        $("#nome_exercicio").autocomplete({
            source: <?php echo json_encode($exercicios); ?> // Fonte dos dados do autocomplete
        });

        $("#nome_exercicio2").autocomplete({
            source: <?php echo json_encode($exercicios); ?> 
        });


        $("#nome_exercicio3").autocomplete({
            source: <?php echo json_encode($exercicios); ?> 
        });


        $("#nome_exercicio4").autocomplete({
            source: <?php echo json_encode($exercicios); ?> 
        });

    });
    </script>
</head>
<body>
<table>
    <form action="CREATE_TREINO_INSTRU.PHP" method="post">
        <tr>
            
            <td><label for="nome_exercicio">Nome do Exercício1:</label></td>
            <td><label for="qt_Series">Series:</label></td>
            <td><label for="qt_repetiçoes">Repetições:</label></td>
        </tr>
        <tr>
            <td><input type="text" id="nome_exercicio" name="nome_exercicio"></td>
            <td><input type="text" id="Series" name="Series"></td>
            <td><input type="text" id="repetiçoes" name="repetiçoes"></td>
        </tr>

        <tr>
            <td><label for="nome_exercicio2">Nome do Exercício 2:</label></td>
            <td><label for="qt_Series2">Series:</label></td>
            <td><label for="qt_repetiçoes2">Repetições:</label></td>
           
        </tr>

        <tr>
            <td><input type="text" id="nome_exercicio2" name="nome_exercicio2"></td>
            <td><input type="text" id="Series2" name="Series2"></td>
            <td><input type="text" id="repetiçoes2" name="repetiçoes2"></td>
        </tr>

             <tr>
            <td><label for="nome_exercicio3">Nome do Exercício3:</label></td>
            <td><label for="qt_Series3">Series:</label></td>
            <td><label for="qt_repetiçoes3">Repetições:</label></td>
        </tr>
        <tr>
            <td><input type="text" id="nome_exercicio3" name="nome_exercicio3"></td>
            <td><input type="text" id="Series3" name="Series3"></td>
            <td><input type="text" id="repetiçoes3" name="repetiçoes3"></td>
        </tr>

        <tr>
            <td><label for="nome_exercicio4">Nome do Exercício 4:</label></td>
            <td><label for="qt_Series4">Series:</label></td>
            <td><label for="qt_repetiçoes4">Repetições:</label></td>
           
        </tr>

        <tr>
            <td><input type="text" id="nome_exercicio4" name="nome_exercicio4"></td>
            <td><input type="text" id="Series4" name="Series4"></td>
            <td><input type="text" id="repetiçoes4" name="repetiçoes4"></td>
        </tr>
        
        <tr>
            <input type="texte" id="id_aluno" name="id_aluno" value="<?php echo $id_aluno; ?>" readonly><br>
            <br><td colspan="4"><input type="submit" value="Enviar"></td>
        </tr>

    </form>
</table>
   <br> <a href="MENU_INSTRUTOR.php?id_aluno=999">VOLTAR</a>
</body>
</html>

<?php
$conn->close();
?>

