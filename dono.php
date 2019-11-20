<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" http-equiv="refresh" content="5">
<link rel="stylesheet" href="css/estilo_dono.css">
<title>Controle de Pedidos</title>




</head>



<body>

<?php
	require_once("pedido.class.php"); ///Chama a classe pedido
	$obj=new mesas($link);
?> <!--Declaracao Objeto-->

<?php
$query="select count(Numero)
		from mesas";
$sql=mysqli_query($link,$query);
$nmesas=(int)mysqli_fetch_all($sql)[0][0];
?> <!--Defini quantas mesas tem no restaurante-->

<header>










</header>














<main>
<?php
$npedidos=0;///Conta numero de pedidos

for($i=0;$i<$nmesas;$i++){
	
	$obj->setPedido($i+1);
	if(!empty($a=$obj->getPedido())){
		
		foreach($a as $value){
			$npedidos++;
		}

		echo "<table> <th colspan='2'>Mesa ".($i+1)."</th>
			<tr><td>Nome do Produto</td>
			<td>Quantidade</td></tr>";

		for($j=0;$j<$npedidos;$j++){
			echo "<tr><td>".$a[$j][1]."</td><td>".$a[$j][2]."</td></tr>";
		}
		$npedidos=0;
		echo "</table>";

	}
}




?>


</main>




















</body>
</html>