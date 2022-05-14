
<?php

class Database
{
	private $host;
	private $db;
    private $charset;
    private $user;
    private $pass;
	private $opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
    private $connection ;
	public function __construct(string $host="localhost",string $db="mysql1",string $charset="utf8",string $user="root",string $pass="")
	{
		$this->host=$host;
		$this->db=$db;
		$this->charset=$charset;
		$this->user=$user;
		$this->pass=$pass;
	}
	
	private function connect()//חיבור data base
	{
		$dsn="mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
		$this->connection=new PDO($dsn,$this->user,$this->pass,$this->opt);
	}

	public function disconnect()//יציאה
	{
		$this->connection=null;
	}
	
	public function getResults($query,$data)
	{
		$this->connect();
		
		$stmt  = $this->connection->prepare($query);
		$stmt->execute($data);
		$data = $stmt->fetchAll();		
		
		$this->disconnect();
		return $data;
	}
	public function getResults2($id)
{
	$this->connect();
		
	$result=$this->connection->query("SELECT passwords FROM students WHERE id_students=$id");
	$x=$result->fetch(PDO::FETCH_ASSOC);
	
	$this->disconnect();
	if(!empty($x['passwords']))
	return $x['passwords'];
	else return 0;
}
public function getResults3($id)
{
	$this->connect();
		
	$result=$this->connection->query("SELECT passwordt FROM teachers WHERE id_teachers=$id");
	$x=$result->fetch(PDO::FETCH_ASSOC);
	
	$this->disconnect();
	if(!empty($x['passwordt']))
	return $x['passwordt'];
	else return 0;
}
public function getResults4($id){
	$this->connect();
		
	$result=$this->connection->query("SELECT PASSWORD FROM manager WHERE ID_MANAGER=$id");
	$x=$result->fetch(PDO::FETCH_ASSOC);
	
	$this->disconnect();
	if(!empty($x['PASSWORD']))
	return $x['PASSWORD'];
	else return 0;
}
	public function commit($query)
	{
		$this->connect();
		$this->connection->exec($query);
		$this->disconnect();
		
	}	
	
	
}

$db=new Database();

?>

