<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pratica2_dani";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$CPF = $_POST['CPF']
$telefone = $_POST['telefone'];

$sql = "INSERT INTO cliente (nome, email, CPF, telefone) VALUES ('$nome', '$email', '$CPF', '$telefone')";


if ($conn->query($sql) === TRUE) {
    $cliente_id = $conn->insert_id;
    $response = ['mensagem' => 'Cliente cadastrado com sucesso' => true, 'cliente_id' => $cliente_id];
} else {
    $response = ['mensagem' => 'Erro ao cadastrar cliente: ' . $conn->error];
}

echo json_encode($response);

$conn->close();
?>