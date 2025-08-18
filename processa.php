<?php
$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$sexo = $_POST['Sexo'];

// Conectar ao banco
$strcon = mysqli_connect('localhost', 'joao', '123', 'banco_teste');

// Verificar conexão
if (!$strcon) {
    die('Não foi possível conectar ao MySQL: ' . mysqli_connect_error());
}

echo 'Conexão realizada com sucesso! <br><br>';
echo 'Nome do Cliente: ' . $nome . '<br>';
echo 'Sobrenome do Cliente: ' . $sobrenome . '<br>';
echo 'Sexo do Cliente: ' . $sexo . '<br>';

// Fechar conexão
mysqli_close($strcon);
?>
