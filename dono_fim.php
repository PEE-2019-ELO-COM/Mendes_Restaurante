<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/EstiloDonoFinal.css">
<title>Controle de Pedidos</title>




</head>


<body>

<?php
	require_once("pedido.class.php"); ///Chama a classe pedido
	$obj=new mesas($link);
?> <!--Declaracao Objeto-->

<header>

<bdi id="titulo">Su<bdi style="color:#ff3300">shi</bdi>ro</bdi> 
	<bdi id="ResultadoDoDia">Resultado do Dia</bdi>
	<bdi id="subtitulo">Culinária Japonesa</bdi>

</header>














<main>


<h id="Npedidostitulo"><b>Numero de pedidos no dia</b></h>
<bdi id="Npedidos">
	<?php

	echo $obj->totalpedidos();
	
	$obj->zerardia();


?>
</bdi>





</main>



<footer>


<form action="dono.php">
	<button id="botaocomecar">Começar</button>


</footer>







</body>
</html>