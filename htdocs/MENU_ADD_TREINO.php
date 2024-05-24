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

        echo "<tr>
        <td style='border: 3px solid black;width: 35%;'>|
        <a href='treino_add_A.php?id_aluno=".$id_aluno."'><button type='button'>FOCO EM PERNA INICIANTE HIPERTROFIA</button></a> |
         <a href='treino_add_B.php?id_aluno=".$id_aluno."'><button type='button'>FOCO EM PERNA INTERMEDIÁRIO HIPERTROFIA</button></a> |
          <a href='treino_add_C.php?id_aluno=".$id_aluno."'><button type='button'>FOCO EM EMAGRECIMENTO TREINO 1</button></a> |
           <a href='treino_add_D.php?id_aluno=".$id_aluno."'><button type='button'>FOCO EM EMAGRECIMENTO TREINO 2</button></a> |<br><br>
           </a></td></tr>";
         //| <a href='treino_add_E.php?id_aluno=".$id_aluno."'><button type='button'>TREINO E</button></a> |
         //<a href='treino_add_F.php?id_aluno=".$id_aluno."'><button type='button'>TREINO F</button></a> |
          //<a href='treino_add_G.php?id_aluno=".$id_aluno."'><button type='button'>TREINO G</button></a> |
           //<a href='treino_add_H.php?id_aluno=".$id_aluno."'><button type='button'>TREINO H</button></a> |

        
 
    echo "</table>";
    echo "<br><br><br><br><br><br><br><a href='treino_delet_all.php?id_aluno=".$id_aluno."'><button type='button'>EXCLUIR TREINO ATUAL</button></a>";
    echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR MENU</button></a>";


$conn->close();
?>

</body>