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

	public function numerodemesas(){
		$query="select count(Numero)
		from mesas";
		$sql=mysqli_query($this->link,$query);
		return (int)mysqli_fetch_all($sql)[0][0];
	}


	public function finalizapedido($i){
		$query="delete from pedidos
				where Numero='$i'";
		mysqli_query($this->link,$query);
	}

	public function zerardia(){
		$query="alter table pedidos
				auto_increment=".'1';
		mysqli_query($this->link,$query);
	}

	public function totalpedidos(){
		$query="insert into pedidos(ID,Numero,quantidade)
				values (1,1,999)";
		mysqli_query($this->link,$query);
		$query="select max(contagem)
				from pedidos";
		$sql=mysqli_query($this->link,$query);
		$a=(int)mysqli_fetch_array($sql)[0];
		$a-=1;
		$query="delete from pedidos
				where quantidade=999";
		mysqli_query($this->link,$query);
		$query="alter table pedidos
				auto_increment=".$a;
		mysqli_query($this->link,$query);
		return ($a);
	}
}

?>