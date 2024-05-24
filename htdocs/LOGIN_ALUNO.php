<?php

include 'conexao.php';

$login = $_POST['username'];
$senha = $_POST['password'];

$sql = "SELECT aluno.id_aluno FROM aluno WHERE  login = '$login' and senha = '$senha'";

$result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // Login bem-sucedido
        $row = $result->fetch_assoc();
        $id_aluno = $row['id_aluno'];
        header("Location: MENU_ALUNO.php?id_aluno=$id_aluno");

        exit();
        echo "Login bem-sucedido!"
        ;
        // redirecionar o usuário para outra página após o login
    } else {
        // Login incorreto
        echo "Login ou senha incorretos.";
        echo "<br><br><a href='LOGIN_ALU_INDEX.html'>Voltar</a><br>";
    }


// Fecha a conexão com o banco de dados
$conn->close();
?>
