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


    echo "<table>";
    echo "<tr><th>MENU INSTRUTOR</th></tr>";
  
        echo "<tr>
         <td/><br>
         | <a href='GERENCIA_ALUN_INSTRU.php?id_aluno=".$id_aluno."'>ALUNOS</a><br><br> |
         <a href='GERENCIA_EXERC_INSTRU.php?id_aluno=".$id_aluno."'>EXERCICIOS</a><br><br> |
         <a href='GERENCIA_AULA_GR_INSTRU.php?id_aluno=".$id_aluno."'>AULAS EM GRUPO</a><br><br>| 
         <a href='GERENCIA_HORAR_INSTRU.php?id_aluno=".$id_aluno."'>HORARIOS AULAS</a><br><br> |
         <a href='MAPA_PITTY_INSTRU.php?id_aluno=".$id_aluno."'>MAPA</a><br><br> |  
         <a href='GERENCIA_TREINOS_INSTRU.php?id_aluno=".$id_aluno."'>TREINOS</a><br>  <td></td></tr>";
 
    echo "</table>";
    echo "<br><br><a href='LOGIN_ADMIN_INDEX.html'><button type='button'>SAIR</button></a><br>";


$conn->close();
?>

    </body>