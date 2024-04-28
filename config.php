<?php
include_once('conexao.php');

// Recebendo dados do formulário
$EMPRESA = $_POST['Selecione a Empresa'];
$EMAIL_GESTOR = $_POST['Email Gestor'];
$EMPREGADO = $_POST['Empregado'];
$DT_IN_GOZO = $_POST['Data de início do gozo'];
$DIAS_GOZO = $_POST['Dias de gozo'];
$DIAS_ABONO = $_POST['Dias de abono opcional'];
$DT_AVISO = $_POST['Data do aviso opcional'];
$DT_PAGAMENTO = $_POST['Data do pagamento opcional'];
$ASSUNTO = $_POST['Assunto'];
$DESCRICAO = $_POST['mensagem'];
$EXPECTATIVA = $_POST['Expectativa de Conclusão opcional'];

// Preparando a consulta SQL
$stmt = $conn->prepare("INSERT INTO put_aviso_previo_ferias (Selecione a Empresa, Email Gestor, Empregado, Data de início do gozo, Dias de gozo, Dias de abono opcional, Data do aviso opcional, Data do pagamento opcional, Assunto, mensagem, Expectativa de Conclusão opcional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $EMPRESA, $EMAIL_GESTOR, $EMPREGADO, $DT_IN_GOZO, $DIAS_GOZO, $DIAS_ABONO, $DT_AVISO, $DT_PAGAMENTO, $ASSUNTO, $DESCRICAO, $EXPECTATIVA);

// Executando a consulta
if ($stmt->execute()) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
