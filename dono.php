<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" http-equiv="refresh" content="5">
<link rel="stylesheet" href="css/estilo_dono.css">
<title>Controle de Pedidos</title>




</head>



<body>
<?php
	require_once("db.class.php");
	$objDB=new db();                       
	$link=$objDB->conecta_mysql();
?>

<?php
$query="select pedidos.Numero,preco.nome,sum(pedidos.quantidade)
from mesas
inner join pedidos on pedidos.Numero=mesas.Numero
inner join preco on preco.ID=pedidos.ID
group by preco.nome
order by pedidos.Numero";

$sql=mysqli_query($link,$query);




if(mysqli_fetch_array($sql)){
	$pedidos=mysqli_fetch_all($sql);
	echo "<table> <th colspan='2'>Mesa ".$pedidos[0][0]."</th> </table>";



/*Tenho que continuar daqui*/



}




else{
echo "<p>Nada</p>";

}

?>























</body>
</html>