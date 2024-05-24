 <?php

     $id_categoria = $_GET['id_aula'];

     ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
      <style>
        body {
            background-color:orangered;
            color: black;
           
        }
       
    </style>
    <title>Pitty NOVO EXERCICIO </title>
</head>
 
<body>
   

    <h2>NOVO EXERCICIO</h2>
    <form action="CREATE_EXERCICIOS_INSTRU.php" method="post">
        <label for="id_categoria">ID CATEGORIA:</label><br>
        <input type="texte" id="id_categoria" name="id_categoria" value="<?php echo $id_categoria; ?>" readonly><br>
            
        <label for="nome">Nome:</label><br>
        <input type="TEXTE" id="nome" name="nome" required><br><br><br>

        <input type="submit" value="Adicionar">

    </form>

<br><br><br><br>
 <a href="GERENCIA_EXERC_INSTRU.php?id_aluno=999"><button type='button'>VOLTAR</button></a>

</body>
</html>





