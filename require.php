
<?php

require_once ='config.php';

// Verifica se o formulário foi enviado

$respostas_formulario = $pdo->query('SELECT * FROM retorno_formulario')->fetch();

