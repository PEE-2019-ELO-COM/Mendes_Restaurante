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




<main>
<?php
$npedidos=0;///Conta numero de pedidos

for($i=0;$i<$nmesas;$i++){
	

	if(!empty($a=$obj->getPedido($i+1))){
		
		foreach($a as $value){
			$npedidos++;
		}

		echo "<table> <th colspan='2'>Mesa ".($i+1)."</th>
			<td>Nome do Produto</td>
			<td>Quantidade</td>";

		for($j=0;$j<$npedidos;$j++){
			echo "<th><td>".$a[$j][0]."</td><td>".$a[$j][1]."</td></th>";
		}
		echo "</table>";

	}
}




?>


</main>




















</body>
</html>