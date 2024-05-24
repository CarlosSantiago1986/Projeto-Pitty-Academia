<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitty</title>
    <style>
           body {
            background-color:orangered;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            text-align: center;
        }
       
    </style>
</head>
<body>

<?php
include 'conexao.php';
$id_aluno = $_GET['id_aluno'];

echo "<table>";
    echo "<tr><th>EXERCICIOS</th></tr>";
    echo"<br>";
        echo "<tr><td/><a href='TREINOS_ALUN_A.php?id_aluno=".$id_aluno."'>A.  PEITORAL-TRICEPS - [SEGUNDA & QUINTA]</a><br><br>  
        <a href='TREINOS_ALUN_B.php?id_aluno=".$id_aluno."'>B. BICEPS-COSTA-OMBRO- [QUARTA]</a><br><br>  
        <a href='TREINOS_ALUN_C.php?id_aluno=".$id_aluno."'>FOCO. PERNAS-LOMBAR-DELTOIDES- [TERÇA & SEXTA] </a><br><br>  
        <a href='TREINOS_ALUN_S.php?id_aluno=".$id_aluno."'>S. ABDOMEN - [SÁBADO]</a><br><br><br><br> <br><br>   
        <a href='MENU_ALUNO.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a><br><td/></tr>";
        echo "</table>";








?>


</body>