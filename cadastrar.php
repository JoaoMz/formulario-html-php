<?php

$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$sexo = $_POST['Sexo'];

$strcon = mysqli_connect('localhost', 'joao', '123', 'banco_teste' ) or die('Erro ao conectar Banco de dados');
$sql = "INSERT INTO cadastro VALUES";
$sql . = "('$nome', '$sobrenome', '$sexo')";
mysql_query($strcon, $sql) or die ("Erro ao tentar cadastrar o registro");
mysql_close($strcon);
echo "Cliente cadastrado com sucesso!"

?>