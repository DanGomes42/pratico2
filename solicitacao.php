<?php
$servername = "Localhost";
$username = "root";
$password = "root";
$dbname = "pratica2_dani";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$cliente_id = $_GET['cliente_id'];

$descricao = $_POST['descricao'];
$criticidade = $_POST['urgencia'];
$status = $_POST['status'];
$data_abertura = $_POST['data_abertura'];
$colaborador = $_POST['funcionario'];

$sql = "INSERT INTO chamado (cliente_id, descricao, urgencia, status, data_abertura, id_funcionario) 
        VALUES ('$cliente_id', '$descricao', '$urgencia', 'pendente', '$data_abertura', '$funcionario')";

if ($conn->query($sql) === TRUE) {
    $response = ['mensagem' => 'Solicitação cadastrada com sucesso'];
} else {
    $response = ['mensagem' => 'Erro ao cadastrar solicitação: ' . $conn->error];
}

echo json_encode($response);

$conn->close();
?>