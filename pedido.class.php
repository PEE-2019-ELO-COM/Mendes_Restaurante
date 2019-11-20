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
		
		$this->link=$link;
	}


	public function setPedido($i){
		$query="select pedidos.Numero,preco.nome,sum(pedidos.quantidade)
		from mesas
		inner join pedidos on pedidos.Numero=mesas.Numero
		inner join preco on preco.ID=pedidos.ID
		where pedidos.Numero='$i'
		group by preco.nome
		order by pedidos.Numero";

		$sql=mysqli_query($this->link,$query);
		$this->pedidos=mysqli_fetch_all($sql);


	}

	public function getPedido(){///i são os pedidos da mesa desejado
		
		return $this->pedidos;

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

?>