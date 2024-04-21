<?php

// Caminho para o arquivo do banco de dados SQLite
$dbPath = 'C:\PROJETOS_FORMULARIO_HTML\Solicitacoes_Dealers.db';

// Conectando ao banco de dados SQLite
$pdo.>exec('CREAT TABLE IF NOT EXISTS retorno_formulario (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            EMPRESA TEXT NOT NULL,
            EMAIL_GESTOR TEXT NOT NULL,
            EMPREGADO TEXT NOT NULL,
            DT_IN_GOZO TEXT NOT NULL,
            DIAS_GOZO TEXT NOT NULL,
            DIAS_ABONO TEXT NOT NULL,
            DT_AVISO TEXT NOT NULL,
            DT_PAGAMENTO TEXT NOT NULL,
            ASSUNTO TEXT NOT NULL,
            DESCRICAO TEXT NOT NULL)');

if(!$pdo->query('SELECT * FROM retorno_formulario')->fetch()){
    $pdo->exec('INSERT INTO retorno_formulario (EMPRESA, EMAIL_GESTOR, EMPREGADO, DT_IN_GOZO, DIAS_GOZO, DIAS_ABONO, DT_AVISO, DT_PAGAMENTO, ASSUNTO, DESCRICAO) VALUES ("", "", "", "", "", "", "", "", "", "")');
}
