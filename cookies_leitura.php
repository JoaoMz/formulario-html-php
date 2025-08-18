<?php

header("Content-type/html; charset=utf-8");
print_r($_COOKIE);
echo "<br>";
if (isset($_COOKIE['Teste'])) {

	$valor_cookie = $_COOKIE['Teste'];
	echo "O cookie tem o valor de " . $valor_cookie;

}

else{
	echo "cookie não encontrado;";
}


?>