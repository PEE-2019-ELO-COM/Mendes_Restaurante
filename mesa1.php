<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"> <!-- http-equiv="refresh" content="5"-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilo_cliente.css">
<!--<script type="text/javascript" src="js/script.js"></script>-->
<title>Mesa 1</title>

<style>
	#pedido:hover{
		color:white;
		background-color:#646362;
		border-right:solid 2px;
		border-left:solid 2px;
		padding-top:2px;
		padding-bottom: 2px;
	}
	#chamar:hover{
		color:white;
		background-color:#646362;
		border-right:solid 2px;
		border-left:solid 2px;
		padding-top:2px;
		padding-bottom: 2px;
	}
	
	#fechar:hover{
		color:white;
		background-color:#646362;
		border-right:solid 2px;
		border-left:solid 2px;
		padding-top:2px;
		padding-bottom: 2px;
	
	}



</style>




</head>






<body>

	<?php
	require_once("db.class.php");
	$objDB=new db();                       
	$link=$objDB->conecta_mysql();
?>

<header>

	<bdi id="titulo">Su<bdi style="color:#ff3300">shi</bdi>ro</bdi> 
	<bdi id="mesa">Mesa 1</bdi>
	<bdi id="subtitulo">Culinária Japonesa</bdi>

</header>





<nav style="color:black;">

	<table id="navegacao">
		<tr>
		<td class="coluna_nav" style="border-left:solid 3px;"><a id="pedido">Pedido</a></td>
		<td class="coluna_nav"><a id="chamar">Chamar Garçom</a></td>
		<td class="coluna_nav"><a id="fechar">Fechar Conta</a></td>
		</tr>
	</table>

</nav>








<main>
	
	<table id="cardapio_tabela">
		
	<form method="post" action="mesa1.php">


		<th id="cardapio" colspan="2">
			Cardápio
		</th>

		<tr>
			<td id="makimono"> <ul> <u id="titulos_cardapio">Makimonos:</u> 
				<li id="itens">Philadelphia Salmão 
					<select name="1">
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				 </li>



				<li id="itens">Hot Philadelphia Salmão
					<select name="2">
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>

				</li>
				<li id="itens">Uramaki Salmão
					<select name="3">
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>
				<li id="itens">Philadelphia Atum
					<select name="4">
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>
				<li id="itens">Hot Philadelphia Atum
					<select name="5" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>

			 </ul>   </td>




			
			<td id="sashimi"> <ul> <u id="titulos_cardapio">Sushi:</u> 
				<li id="itens">Salmão
					<select name="6" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>
				<li id="itens">Atum
					<select name="7" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>
				<li id="itens">Peixa Branco
					<select name="8" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>

			</ul> 
				<ul> <u id="titulos_cardapio">Sashimi:</u>
				<li id="itens">Salmão
					<select name="9" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>
				<li id="itens">Atum
					<select name="10" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>
				<li id="itens">Peixa Branco
					<select name="11" diasbled>
						<option value="0"></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						</select>
				</li>


				 </ul>

			</td>
			</tr>
		





			<tr>
				<td id="harumaki"> <ul> <u id="titulos_cardapio">Harumaki:</u>

					<li id="itens">Camarão
						<select name="12" diasbled>
							<option value="0"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					</li>


					<li id="itens">Legumes
						<select name="13" diasbled>
							<option value="0"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					</li>



					<li id="itens">Salmão
						<select name="14" diasbled>
							<option value="0"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					</li>




						</td></ul>




				<td id="temaki"> <ul> <u id="titulos_cardapio">Temaki:</u>

					<li id="itens">Philadelphia Salmão
						<select name="15" diasbled>
							<option value="0"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					</li>


					<li id="itens">Salmão
						<select name="16" diasbled>
							<option value="0"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					</li>



					<li id="itens">Hot Philadelphia Salmão
						<select name="17" diasbled>
							<option value="0"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
					</li>






				</td></ul>





			</tr>





<tr id="tabelafinal">
	<td id="obs">
		<ul><u style="font-size:25px;">Porções:</u>
			<li>Makimonos porção de 5 unidades</li>
			<li>Sushi e Sashimi porção de 2 unidades</li>
		</ul>
	</td>



	<td id="enviar">
		<button type="submit">Fazer Pedido</button>

	</td>

</tr>

</form>
	</table>





<?php
if(!empty($_POST)){

foreach($_POST as $key=>$valor){

if($valor<>0){

$query="insert into pedidos(Numero,ID,quantidade)
		values (1,'$key','$valor')";
mysqli_query($link,$query);}
}
	
}


?>

</main>



<footer>


</footer>





</body>
</html>