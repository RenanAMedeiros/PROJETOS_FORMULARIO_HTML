<?php
// Configurações de conexão ao banco de dados
$host = "localhost";
$banco = "form_aviso_previo_de_ferias";
$user = "root";
$pass = "";

// Criando conexão
$conn = new mysqli($host, $user, $pass, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

