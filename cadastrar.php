<?php
$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$sexo = $_POST['Sexo'];

// Conectar ao banco
$strcon = mysqli_connect('localhost', 'joao', '123', 'banco_teste') 
    or die('Erro ao conectar ao Banco de Dados');

// Montar SQL (especificando as colunas da tabela)
$sql = "INSERT INTO cadastro (NomeCliente, SobrenomeCliente, SEXO) 
        VALUES ('$nome', '$sobrenome', '$sexo')";

// Executar query
if (mysqli_query($strcon, $sql)) {
    echo "✅ Cliente cadastrado com sucesso!";
} else {
    echo "❌ Erro ao cadastrar: " . mysqli_error($strcon);
}

// Fechar conexão
mysqli_close($strcon);
?>
