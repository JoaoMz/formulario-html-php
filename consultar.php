<?php
//CRIANDO TABELA E CABEÇALHO DOS DADOS:
echo "<table border=1>";
echo "<tr>";
echo "<th>NOME</th>";
echo "<th>SOBRENOME</th>";
echo "<th>SEXO</th>";
echo "</tr>";

//CONEXÃO COM O BD
$strcon = mysqli_connect('localhost', 'joao', '123', 'banco_teste')or die('Erro ao Conectar no Banco de Dados')
$sql = "SELECT * FROM cadastro";
$resultado = msql_query($strcon, $sql) or die ("Erro ao tentar capturar registros");


// Obtendo os dados por meio de um loop while

while ($registro = mysqli_fetch_array($resultado)) {
	$nome = $registro['NomeCliente'];
	$sobrenome = $registro['SobrenomeCliente'];
	$sexo = $registro['Sexo'];

	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"$.$nome."</th>";
	echo "<th>"$.$sobrenome."</th>";
	echo "<th>"$.$sexo."</th>";
	echo "</tr>";

}
mysqli_close($strcon);
echo "</table>";

?>