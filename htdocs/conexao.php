<?php
$servername = "sql304.infinityfree.com";
$username = "if0_36392421";
$password = 'Pitty2024';
$dbname = "if0_36392421_pitty_academia";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8mb4")) {
    printf("Erro ao definir o conjunto de caracteres utf8mb4: %s\n", $conn->error);
    exit();
}
?>


