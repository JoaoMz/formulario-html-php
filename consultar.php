<?php
//CRIANDO TABELA E CABEÇALHO DOS DADOS:
echo "<table border=1>";
echo "<tr>";
echo "<th>NOME</th>";
echo "<th>SOBRENOME</th>";
echo "<th>SEXO</th>";
echo "</tr>";

//CONEXÃO COM O BD
$strcon = mysqli_connect('localhost', 'joao', '123', 'banco_teste') 
    or die('Erro ao Conectar no Banco de Dados');

//CONSULTA
$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($strcon, $sql) or die("Erro ao tentar capturar registros");

// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $nome = $registro['NomeCliente'];
    $sobrenome = $registro['SobrenomeCliente'];
    $sexo = $registro['SEXO'];

    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sobrenome."</td>";
    echo "<td>".$sexo."</td>";
    echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
?>
