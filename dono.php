<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" http-equiv="refresh" content="1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/EstiloDono.css">
<title>Controle de Pedidos</title>




</head>



<body>

<?php
	require_once("pedido.class.php"); ///Chama a classe pedido
	$obj=new mesas($link);
?> <!--Declaracao Objeto-->

<?php
$nmesas=$obj->numerodemesas();
?> <!--Defini quantas mesas tem no restaurante-->

<header>

<bdi id="titulo">Su<bdi style="color:#ff3300">shi</bdi>ro</bdi> 
	<bdi id="ControleDePedido">Controle de Pedidos</bdi>
	<bdi id="subtitulo">Culinária Japonesa</bdi>

</header>














<main>

	<table id="tabelacentral"><tr>
<?php

///Conta numero de pedidos

for($i=0;$i<$nmesas;$i++){
	
	$npedidos[$i]=0;
	echo "<td id='colunamesa'>";
	$obj->setPedido($i+1);
	if(!empty($a=$obj->getPedido())){
		
		foreach($a as $value){
			$npedidos[$i]++;
		}

		echo "<table id='tabelainterna'> <th colspan='2'>Mesa ".($i+1)."</th>
			<tr><td id='colunainterna'>Nome do Produto</td>
			<td>Quantidade</td></tr>";

		for($j=0;$j<$npedidos[$i];$j++){
			echo "<tr><td id='colunainterna'>".$a[$j][1]."</td><td id='colunainterna'>".$a[$j][2]."</td></tr>";
		}
		

		echo "<th colspan='2'>
			<form method='post' action='dono.php'>
				<input type='hidden' name='exclui' value='".($i+1)."'>
				<button type='submit'>Pedido Enviado</button>
			</form>
			</th>";
		echo "</table>";

	}



	echo "</td>";
}

?>



</tr>
<table>




</main>



<footer>

<?php

$test=0;

foreach($npedidos as $key=>$value){
	if($value<>0){
	$test=1;
	}
}

if($test==0){
echo "<form action='dono_fim.php'>
	<input type='hidden' name='zerardia' value='1'>
	<button type='submit' id='botaofinalizar'>Finalizar Expediente</button>
</form>";
}


?>

</footer>



<!-- Tratar o envio do pedido -->
<?php

if(!empty($_POST['exclui'])){
	$obj->finalizapedido($_POST['exclui']);
}

?>



</body>
</html>