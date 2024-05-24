
<?php

     $id_aula = $_GET['id_aula'];

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
    <title>Pitty NOVO HORARIO AULA</title>
</head>
 
<body>
   

    <h2>NOVO HORARIO</h2>
    <form action="CREATE_HORARIOS_INSTRU.php" method="post">
        <label for="id_aula">ID:</label><br>
        <input type="texte" id="id_aula" name="id_aula" value="<?php echo $id_aula; ?>" readonly><br>
            
        <label for="segunda">Segunda:</label><br>
        <input type="time" id="segunda" name="segunda"><br>

        <label for="terça">Terça:</label><br>
        <input type="time" id="terça" name="terça"><br>

        <label for="quarta">Quarta:</label><br>
        <input type="time" id="quarta" name="quarta"><br>

        <label for="quinta">Quinta:</label><br>
        <input type="time" id="quinta" name="quinta"><br>

        <label for="sexta">Sexta:</label><br>
        <input type="time" id="sexta" name="sexta"><br>

        <label for="sabado">Sabado:</label><br>
        <input type="time" id="sabado" name="sabado"><br>

        <label for="domingo">Domingo:</label><br>
        <input type="time" id="domingo" name="domingo"><br><br>
        <input type="submit" value="Adicionar">

    </form>

<br><br><br><br>
 <a href="GERENCIA_HORAR_INSTRU.php?id_aluno=999"><button type='button'>VOLTAR</button></a>

</body>
</html>




