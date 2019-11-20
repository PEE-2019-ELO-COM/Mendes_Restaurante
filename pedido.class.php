<?php
	require_once("db.class.php");
	$objDB=new db();                       
	$link=$objDB->conecta_mysql();

?>

<?php
class mesas{

	private $pedidos; // Contem Numero da mesa, Nome do pedido, Quantidade de cada pedido
	private $link; ///Para linkar com o banco de dados sem precisar passar o tempo todo

	public function __construct($link){  
		$query="select pedidos.Numero,preco.nome,sum(pedidos.quantidade)
		from mesas
		inner join pedidos on pedidos.Numero=mesas.Numero
		inner join preco on preco.ID=pedidos.ID
		where pedidos.Numero=1
		group by preco.nome
		order by pedidos.Numero";

		$sql=mysqli_query($link,$query);
		$this->pedidos=mysqli_fetch_all($sql);

		$this->link=$link;
	}


	public function setPedido($i){


	}

	public function getPedido($i){///i são os pedidos da mesa desejado
		$j=0;
		$pedidoi=array();
		foreach($this->pedidos as $key=>$valor){
			if($valor[0]==$i){
				$pedidoi[$j]=$valor;
				$j++;
			}
		}
		return $pedidoi;

	}

	
	public function fecharconta($i){

		$query="select sum(pedidos.quantidade), preco.preco 
				from preco 
				inner join pedidos on preco.ID=pedidos.ID
				where pedidos.Numero='$i'
				group by preco.preco";
		$sql=mysqli_query($this->link,$query);
		$conta=0.0;
		foreach(mysqli_fetch_all($sql) as $key=>$value){
			$conta+=$value[0]*$value[1];
		}
		return $conta;
	}



}

$obJ=new mesas($link);

var_dump($obJ->getPedido(1));
?>