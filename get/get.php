<?php

ob_start();
class get
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
	//BACKUP
	public function Quote($INDEX)
	{
		$this->connect();
		$data = $this->connection->quote($INDEX);
		$this->disconnect();
		return $data;
	}
	public function ShowTable()
	{
		$this->connect();
		$data = $this->connection->query('SHOW TABLES');
		
	
		
		$this->disconnect();
		return $data;
	}
	public function ShowTableColums($table)
	{
		$this->connect();
		$data = $this->connection->query("SHOW COLUMNS FROM $table");
		
	
		
		$this->disconnect();
		return $data;
	}
	public function SelectTable($table)
	{
		$this->connect();
		$data  = $this->connection->query("SELECT * FROM $table");
	
			
		
		$this->disconnect();
		return $data;
	}
	//END BACKUP
	public function getResults($query,$data)
	{
		$this->connect();
		
		$stmt  = $this->connection->prepare($query);
		$stmt->execute($data);
		$data = $stmt->fetchAll();		
		
		$this->disconnect();
		return $data;
	}

	public function getAllTeach()
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM teachers");
		
		$this->disconnect();
		return $result;

	}

	public function commit($query)
	{
		$this->connect();
		$this->connection->exec($query);
		$this->disconnect();
		
	}	
	
	public function getIdTeachSub($subnum)
	{	$this->connect();
		$result=$this->connection->query("SELECT subject_id FROM subject where sub=$subnum");
		
		$this->disconnect();
		return $result;

	}
	
	public function getAllCities()//הדפסת כל הנתונים לפי ת.ז 
	{
		$this->connect();
		$result=$this->connection->query("SELECT * FROM city");
		
		$this->disconnect();
		return $result;
	}
    public function getAllKorses()//הדפסת כל הנתונים לפי ת.ז 
	{
		$this->connect();
		$result=$this->connection->query("SELECT * FROM sub");
		
		$this->disconnect();
		return $result;
	}
	 public function geteducation()//הדפסת כל הנתונים לפי ת.ז 
	{
		$this->connect();
		$result=$this->connection->query("SELECT * FROM education");
		
		$this->disconnect();
		return $result;
	}
	public function getAllTopic()
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM forums_main");
		
		$this->disconnect();
		return $result;

	}
	public function getAllReplys()
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM repleis");
		
		$this->disconnect();
		return $result;

	}
	public function getReply($rep)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM repleis where rep_id=$rep ");
		
		$this->disconnect();
		return $result;

	}
	public function getReply2($id)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM repleis where id_fourms=$id");
		
		$this->disconnect();
		return $result;

	}
	public function getCountAllReplys()
	{	$this->connect();
		$result=$this->connection->query("SELECT COUNT(*) FROM repleis");
		
		$this->disconnect();
		return $result;

	}
	public function getIdUser($id)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM teachers where id_teachers=$id");
		
		$this->disconnect();
		return $result;

	}
	public function getFirstNameStudent($id)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM students where id_students=$id");
		
		$this->disconnect();
		return $result;

	}
	public function getname($id)
	{

	}
	public function getIdforum1($id)
	{	$this->connect();
		$result=$this->connection->query("SELECT id_forum FROM forums_main where id_forum=$id");
		
		$this->disconnect();
		return $result;

	}
	public function getforum($id)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM forums_main where id_forum=$id");
		
		$this->disconnect();
		return $result;

	}
	public function getDataforum1($id)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM forums_main where id_forum=$id");
		
		$this->disconnect();
		return $result;

	}
	public function getIdforum()
   {$this->connect();
	$result=$this->connection->query("SELECT id_forum FROM forums_main ORDER BY id_forum DESC LIMIT 1");
	
	$this->disconnect(); 

	return $result;
     
	}

	public function getLike($db,$rep,$user)
	{
	
	$this->connect();
	$result =$this->connection->query( "SELECT likes from likes where rep_id=$rep and id_user=$user ORDER BY likes DESC LIMIT 1 ");
	
	
	$this->disconnect();
	return $result;
	} 
	public function DeleteLike($db,$rep,$user)
	{
	
	$this->connect();
	$result =$this->connection->query( "DELETE likes from likes where rep_id='$rep' and id_user='$user'");
	
	
	$this->disconnect();
	return $result;
	} 
	public function getAllLike($rep)
	{
	
	$this->connect();
	$result =$this->connection->query( "SELECT likes from likes where rep_id=$rep ORDER BY likes DESC LIMIT 1 ");
	
	
	$this->disconnect();
	return $result;
	} 
	public function getTeachPrice($startpoint,$limit)
	{
	
	$this->connect();
	$result =$this->connection->query("SELECT * FROM teachers ORDER BY price ASC  LIMIT $startpoint,$limit");
	
	
	$this->disconnect();
	return $result;
	} 

	

	public function getUnLike($db,$rep,$user)
	{
	
	$this->connect();
	$result =$this->connection->query( "SELECT unlikes from likes where rep_id=$rep and id_user=$user ORDER BY unlikes DESC LIMIT 1 ");
	
	
	$this->disconnect();
	return $result;
	} 

	public function DeleteUnlike($db,$rep,$user)
{$this->connect();
	$result =$this->connection->query("DELETE FROM likes where rep_id='$rep' and id_user='$user'");
	
	
	$this->disconnect();
	return $result;

}
	public function getAllUnLike($rep)
	{
	
	$this->connect();
	$result =$this->connection->query( "SELECT unlikes from likes where rep_id=$rep ORDER BY unlikes DESC LIMIT 1 ");
	
	
	$this->disconnect();
	return $result;
	} 



	public function getDataTeacher($id)
	{
		$this->connect();
	$result=$this->connection->query("SELECT * from teachers where id_teachers=$id");
	
	$this->disconnect(); 

	return $result;
     
	}
	public function getDataStudent($id)
	{
		$this->connect();
	$result=$this->connection->query("SELECT * from students where id_students=$id");
	
	$this->disconnect(); 

	return $result;
     
	}
	public function getCityTeacher($id)
	{
		$this->connect();
	$result=$this->connection->query("SELECT name_c from cities_teachers,city where id_te=$id and city_t=id_c");
	
	$this->disconnect(); 

	return $result;
     
	}
	public function getIdTeachCit($citynum)
	{$this->connect();
		$result=$this->connection->query("SELECT Id_te from cities_teachers where city_t=$citynum");
		
		$this->disconnect(); 
	
		return $result;

	}

	
	public function getEduTeacher($id)
	{
		$this->connect();
	$result=$this->connection->query("SELECT educ from edu_teacher,education where edu_id=$id and edu_t=Id_ed");
	
	$this->disconnect(); 

	return $result;
     
	}
	
	public function getKorsTeacher($id)
	{
		$this->connect();
	$result=$this->connection->query("SELECT name_sub from sub,subject where subject_id=$id and sub=id_sub");
	
	$this->disconnect(); 

	return $result;
     
	}
	public function getPhoto()
	{	$this->connect();
		$result =$this->connection->query("SELECT * FROM images");
		$this->disconnect(); 

		return $result;
	}
	public function insertphoto($fileName)
	{$this->connect();
		$result =$this->connection->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
		$this->disconnect(); 

		return $result;
	}


	public function DeletUserTeacher($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE  from teachers where id_teachers=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function DeletUserTeacherSub($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE from subject where subject_id=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function DeletUserTeacherEdu($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE from edu_teacher where edu_id=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function DeletUserTeacherCity($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE from cities_teachers  where Id_te=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function DeletUserStudent($id)
	{
		
		
		$this->connect();
		$result =$this->connection->query( "DELETE  from students where id_students=$id");
		
		
		$this->disconnect();
		return $result;
	}
	public function  InsertToArchives($fn,$ln,$id,$type)
	{$this->connect();
		$result =$this->connection->query("INSERT into archives(FName,LName,ID,Usertype,TIME) VALUES ('".$fn."','".$ln."','".$id."','".$type."',NOW())");
		$this->disconnect(); 

		return $result;
	}
	public function BlockUser($id,$block,$type)
	{
		echo $type;
		$this->connect();
	if($type==0)//student
	{
		$result =$this->connection->query("UPDATE students SET BlockStudent=$block WHERE id_students=$id");


	}
	else
	if($type==1)//teacher
	{
		$result =$this->connection->query("UPDATE teachers SET Block=$block WHERE id_teachers=$id");

	}	
	else
	if($type==2)//Admin
	{
		$result =$this->connection->query("UPDATE manager SET BlockAdmin=$block WHERE ID_MANAGER=$id");

	}
	$this->disconnect(); 
	return $result;
	}
	public function DeletKors($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE  from sub where id_sub=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function DeletKorsTeach($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE  from subject where sub=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function DeletKorsStud($id)
	{
		
	$this->connect();
	$result =$this->connection->query( "DELETE  from subjectstudent where sub=$id");
	
	
	$this->disconnect();
	return $result;
	}
	public function AddKors($name,$num)
    {
		
	$this->connect();
	$result =$this->connection->query("INSERT into sub(id_sub,name_sub) VALUES ('".$num."','".$name."')");
	
	
	$this->disconnect();
	return $result;
    }
    public function getLastNumKors()
	{
	
	$this->connect();
	$result =$this->connection->query( "SELECT id_sub from sub  ORDER BY  id_sub  DESC LIMIT 1 ");
	
	
	$this->disconnect();
	return $result;
	} 
	public function insertAdmin($ID,$password)
    {
		
	$this->connect();
	$result =$this->connection->query("INSERT into manager(ID_MANAGER,PASSWORD) VALUES ('".$ID."','".$password."')");
	
	
	$this->disconnect();
	return $result;
    }

	public function updatecomment($id,$data)
	{	$this->connect();
		$result =$this->connection->query("UPDATE repleis SET conteants='$data' WHERE rep_id=$id");
	
		$this->disconnect();
		return $result;
	}
	public function updateQuestion ($id,$subject,$question)
    {
		$this->connect();
		$result=$this->connection->query("UPDATE forums_main SET contents='$question' where id_forum=$id");
		$result=$this->connection->query("UPDATE forums_main SET title='$subject' where id_forum=$id");
		$this->disconnect();
		return $result;

	}
	public function pageing($startpoint,$limit)
	{	$this->connect();
		$result =$this->connection->query( "SELECT * from forums_main order by id_forum asc LIMIT $startpoint,$limit");
	
	
		$this->disconnect();
		return $result;
	
	}

	public function getAllReplayes2($startpoint,$limit,$id)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM repleis where id_fourms=$id LIMIT $startpoint,$limit");
		
		$this->disconnect();
		return $result;

	}
		public function getQustionCtagorySearch($id,$startpoint,$limit)
	{
		$this->connect();
		$result=$this->connection->query("SELECT * from forums_main where id_sub=$id  order by id_forum asc  LIMIT $startpoint,$limit");
		
		$this->disconnect(); 
	
		return $result;
	}
	public function page()
	{	$this->connect();
		
		$result =$this->connection->query("SELECT * FROM forums_main");
	
		$this->disconnect();
		return $result;
	}
	public function page2($id)
	{	$this->connect();
		
		$result =$this->connection->query("SELECT * FROM forums_main where id_sub=$id ");
	
		$this->disconnect();
		return $result;
	}
	public function getAllTeach2($startpoint,$limit,$orderbyprice)
	{	$this->connect();
		if($orderbyprice==0)
		$result=$this->connection->query("SELECT * FROM teachers order by firstnamet asc  LIMIT $startpoint,$limit  ");
		if($orderbyprice==1)
		$result=$this->connection->query("SELECT * FROM teachers order by price asc  LIMIT $startpoint,$limit  ");

		$this->disconnect();
		return $result;

	}
	public function getIdTeachSub2($subnum,$startpoint,$limit)
	{	$this->connect();
		$result=$this->connection->query("SELECT subject_id FROM subject where sub=$subnum LIMIT $startpoint,$limit");
		
		$this->disconnect();
		return $result;

	}
	public function getIdTeachCit2($citynum,$startpoint,$limit)
	{$this->connect();
		$result=$this->connection->query("SELECT Id_te from cities_teachers where city_t=$citynum LIMIT $startpoint,$limit");
		
		$this->disconnect(); 
	
		return $result;

	}
	public function searchall($x)
	{$this->connect();
	$result=$this->connection->query("SELECT * from teachers where (`firstnamet` LIKE '%".$x."%') OR (`lastnamet` LIKE '%".$x."%') OR (`id_teachers` LIKE '%".$x."%') OR (`price` LIKE '%".$x."%') OR (`phonet` LIKE '%".$x."%') OR (`mailt` LIKE '%".$x."%') ");
	$this->disconnect();
	return $result;
	}
	public function searchall2($x,$startpoint,$limit,$orderbyprice)
	{$this->connect();
		if($orderbyprice==0)
	$result=$this->connection->query("SELECT * from teachers  where (`firstnamet` LIKE '%".$x."%') OR (`lastnamet` LIKE '%".$x."%') OR (`id_teachers` LIKE '%".$x."%') OR (`price` LIKE '%".$x."%') OR (`phonet` LIKE '%".$x."%') OR (`mailt` LIKE '%".$x."%') order by firstnamet asc LIMIT $startpoint,$limit");
	if($orderbyprice==1)
	$result=$this->connection->query("SELECT * from teachers  where (`firstnamet` LIKE '%".$x."%') OR (`lastnamet` LIKE '%".$x."%') OR (`id_teachers` LIKE '%".$x."%') OR (`price` LIKE '%".$x."%') OR (`phonet` LIKE '%".$x."%') OR (`mailt` LIKE '%".$x."%') order by price asc LIMIT $startpoint,$limit");

	$this->disconnect();
	return $result;
	}

	public function searchallstu($x)
	{$this->connect();
	$result=$this->connection->query("SELECT * from students where (`firstnames` LIKE '%".$x."%') OR(`lastnames` LIKE '%".$x."%') OR (`id_students` LIKE '%".$x."%')  OR (`phones` LIKE '%".$x."%')  OR (`emails` LIKE '%".$x."%')");
	$this->disconnect();
	return $result;
	}
	public function searchallstu2($x,$startpoint,$limit)
	{$this->connect();
	$result=$this->connection->query("SELECT * from students where (`firstnames` LIKE '%".$x."%') OR(`lastnames` LIKE '%".$x."%') OR (`id_students` LIKE '%".$x."%')  OR (`phones` LIKE '%".$x."%')  OR (`emails` LIKE '%".$x."%') order by firstnames asc LIMIT $startpoint,$limit");
	$this->disconnect();
	return $result;
	}
	public function searchalladmin($x)
	{$this->connect();
	$result=$this->connection->query("SELECT * from manager where (`ID_MANAGER` LIKE '%".$x."%') OR (`Mail` LIKE '%".$x."%') ");
	$this->disconnect();
	return $result;
	}
	public function searchalladmin2($x,$startpoint,$limit)
	{$this->connect();
	$result=$this->connection->query("SELECT * from manager where (`ID_MANAGER` LIKE '%".$x."%') OR (`Mail` LIKE '%".$x."%')  order by Mail asc LIMIT $startpoint,$limit");
	$this->disconnect();
	return $result;
	}
	public function poll()
	{$this->connect();
		$result=$this->connection->query("SELECT subject from polls  where id=1");
		
		$this->disconnect();
		return $result;
	}

public function polloption()
{$this->connect();
	$result=$this->connection->query("SELECT * from poll_options where poll_id=1 ");
	
	$this->disconnect();
	return $result;
}
public function insertpoll($val)
{$this->connect();
	$result=$this->connection->query("INSERT INTO poll_votes(poll_id,poll_option_id,vote_count) VALUES (1,".$val.",1)");
	$this->disconnect();
	return $result;
}
private function getQuery($sql,$returnType = ''){
	$result = $this->connection->query($sql);
	if($result){
		switch($returnType){
			case 'count':
				$data = $result->num_rows;
				break;
			case 'single':
				$data = $result->fetch_assoc();
				break;
			default:
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						$data[] = $row;
					}
				}
		}
	}
	return !empty($data)?$data:false;
}

public function getallcountpoll()
{$this->connect();
	$sql =$this->connection->query("SELECT SUM(vote_count) as tot FROM poll_votes");
	$row = $sql->fetch(PDO::FETCH_ASSOC);
		$this->disconnect();
		return 	$row['tot'];
}
public function getcountpoll($pollID)
{$this->connect();
	$sql = $this->connection->query("SELECT SUM(vote_count) as tot FROM poll_votes WHERE poll_option_id = $pollID");
	
	$row = $sql->fetch(PDO::FETCH_ASSOC);

	$this->disconnect();
	return 	$row['tot'];
}

public function gettotal($countpoll,$allcount)
{   if($allcount!=0)
	$votePercent = ($countpoll/$allcount)*100;
	$votePercent = !empty($votePercent)?$votePercent.'%':'0%';
	return 	$votePercent;
}
	//        $sql = "SELECT * FROM ".$this->voteTbl." WHERE poll_id = ".$data['poll_id']." AND poll_option_id = ".$data['poll_option_id'];
	//$preVote = $this->getQuery($sql, 'count');

	public function getAllstudent()
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM students ");
		
		$this->disconnect();
		return $result;

	}

	public function getAllstudent2($startpoint,$limit)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM students order by firstnames asc  LIMIT $startpoint,$limit  ");
        $this->disconnect();
		return $result;

	}
	public function getAlladmin()
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM manager ");
		
		$this->disconnect();
		return $result;

	}
	public function getAlladmin2($startpoint,$limit)
	{	$this->connect();
		$result=$this->connection->query("SELECT * FROM manager order by Mail asc  LIMIT $startpoint,$limit");
		
		$this->disconnect();
		return $result;

	}
	public function getAllTeach3($startpoint,$limit)
	{	$this->connect();

		$result=$this->connection->query("SELECT * FROM teachers order by firstnamet asc   LIMIT $startpoint,$limit  ");
	
		$this->disconnect();
		return $result;

	}
	/*
public function countteach($idsub)
{$this->connect();
	try
	{
$sql= "SELECT * FROM subject WHERE sub=$idsub";
		$result=$db->getResults($sql,array($id));
		if(count($result))
		{ $a=implode(',',$result[0]);
			return count($a);
		}
		else
			return 0;
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}


public function countallteach()
{$this->connect();
	try
	{
$sql= $this->connection->query("SELECT COUNT(*) AS index FROM teachers ");
$row = $sql->fetch(PDO::FETCH_ASSOC);

$this->disconnect();
return 	$row;
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}*/
}
    
?>