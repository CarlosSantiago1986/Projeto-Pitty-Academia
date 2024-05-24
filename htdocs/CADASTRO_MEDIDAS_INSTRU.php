 
<?php
        $id_aluno = $_GET['id_aluno'];
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
    <title>Pitty MEDIDAS ALUNO</title>
    
</head>
 
<body>
     
    <h2>MEDIDAS ALUNO</h2>
    <form action="CREATE_MEDIDAS_INSTRU.php" method="post">
        <label for="id_aluno">ID do Aluno:</label><br>
        <input type="texte" id="id_aluno" name="id_aluno" value="<?php echo $id_aluno; ?>" readonly><br>
            
        <label for="m_peso">Peso:</label><br>
        <input type="text" id="m_peso" name="m_peso" pattern="[0-9]+(\.[0-9]+)?"><br>

        <label for="m_altura">Altura:</label><br>
        <input type="text" id="m_altura" name="m_altura" pattern="[0-9]+(\.[0-9]+)?" ><br>

        <label for="m_torax">Torax:</label><br>
        <input type="text" id="m_torax" name="m_torax" pattern="[0-9]+(\.[0-9]+)?" ><br>

        <label for="m_cintura">Cintura:</label><br>
        <input type="text" id="m_cintura" name="m_cintura" pattern="[0-9]+(\.[0-9]+)?" ><br>

        <label for="m_braço">Braço:</label><br>
        <input type="text" id="m_braço" name="m_braço" pattern="[0-9]+(\.[0-9]+)?" ><br>

        <label for="m_coxa">Coxa:</label><br>
        <input type="text" id="m_coxa" name="m_coxa" pattern="[0-9]+(\.[0-9]+)?"><br>

        <label for="m_panturrilha">Panturrilha:</label><br>
        <input type="text" id="m_panturrilha" name="m_panturrilha" pattern="[0-9]+(\.[0-9]+)?"><br>

        <label for="m_quadril">Quadril:</label><br>
        <input type="text" id="m_quadril" name="m_quadril" pattern="[0-9]+(\.[0-9]+)?" required><br><br>

        <input type="submit" value="Adicionar">
    </form>

    <br><br><br><br>
     <a href="GERENCIA_ALUN_INSTRU.php?id_aluno=999"><button type='button'>VOLTAR</button></a>
</body>
</html>

