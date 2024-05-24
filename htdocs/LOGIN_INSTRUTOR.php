<?php

include 'conexao.php';

$login = $_POST['username'];
$senha = $_POST['password'];

$sql = "SELECT aluno.id_aluno FROM aluno WHERE  login = 'pitty' and senha =  '$senha'";

$result = $conn-> query($sql);


    if ($result->num_rows > 0) {
        // Login bem-sucedido
        $row = $result->fetch_assoc();
        $id_aluno = $row['id_aluno'];
        header("Location: MENU_INSTRUTOR.php?id_aluno=$id_aluno");

        exit();
        echo "Login bem-sucedido!"
        // mandar o intrustor para o menu 
        ;

    } else {
        // Login errado 
        echo "Login ou senha incorretos.";
        echo "<br><br><a href='LOGIN_ADMIN_INDEX.html'><button type='button'>VOLTAR</button></a><br>";
    }


// Fecha a conexão BD
$conn->close();
?>
