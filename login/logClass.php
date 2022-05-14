<?php
class logClass
{
	
	
	public function userLoginstudent($ID,$pass,$db)
	{
		
		try{
	     	$result=$db->getResults2($ID);
	
	
		/* if($pass==$result)
		 return 1;*/
	
			if (password_verify($pass,$result))
        	return 1;
			else
			return 0;
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	
	public function userLoginteacher($ID,$pass,$db)
	{


		try
		{
           
			$result=$db->getResults3($ID);
	
			if (password_verify($pass,$result)){
         	return 1;
			}
			else
			return 0;
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}
	public function userAdmin($ID,$pass,$db)
	{try{
		$result=$db->getResults4($ID);
		if($pass==$result)
		return 1;
		if (password_verify($pass,$result))
		 return 1;
		
		else
		return 0;
		
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
		
	}
	public function user($ID,$db,$d)
	{
		try
		{
			if($d==1)
           $sql="SELECT mailt FROM teachers WHERE id_teachers=$ID";
			else
				if(!$d)
           $sql="SELECT emails FROM students WHERE id_students=$ID";
			else
				if($d==2)
           $sql="SELECT Mail FROM manager WHERE ID_MANAGER=$ID";
			
			$result=$db->getResults($sql,array($ID));
			if(count($result))
			{
				$a=implode(',',$result[0]);
				return $a;
			}
			else
				return 0;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function update($id,$password,$d,$db)
	{
		try
		{
			if($d==1)
            $query="UPDATE teachers SET passwordt='$password' WHERE id_teachers=$id";
			else
				if(!$d)
            $query="UPDATE students SET passwords='$password' WHERE id_students=$id";
			else
				if($d==2)
            $query="UPDATE manager SET PASSWORD='$password' WHERE ID_MANAGER=$id";
			$db->commit($query);
			return 1;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return 0;
		}
		
	}
		public function resetpassword($id,$d,$db)
	{
		try
		{
			if($d==1)
$sql= "SELECT  passwordt FROM teachers WHERE id_teachers =$id";
		else
				if(!$d)
$sql= "SELECT  passwords FROM students WHERE id_students =$id";

			else
				if($d==2)
$sql= "SELECT PASSWORD FROM manager WHERE ID_MANAGER=$id";
			$result=$db->getResults($sql,array($id));
			if(count($result))
			{ $a=implode(',',$result[0]);
				return $a;
			}
			else
				return 0;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function checkblock($id,$d,$db)
	{
		try
		{
			if($d==1)
$sql= "SELECT  Block FROM teachers WHERE id_teachers =$id";
		else
				if(!$d)
$sql= "SELECT  BlockStudent FROM students WHERE id_students =$id";

			else
				if($d==2)
$sql= "SELECT BlockAdmin FROM manager WHERE ID_MANAGER=$id";
			$result=$db->getResults($sql,array($id));
			if(count($result))
			{ $a=implode(',',$result[0]);
				return $a;
			}
			else
				return 0;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function date1($id,$d,$db)
	{
		try
		{
			if($d==1)
$sql= "SELECT  date1 FROM teachers WHERE id_teachers =$id";
		else
				if(!$d)
$sql= "SELECT date1 FROM students WHERE id_students =$id";

			else
				if($d==2)
$sql= "SELECT date FROM manager WHERE ID_MANAGER=$id";
			$result=$db->getResults($sql,array($id));
			if(count($result))
			{ $a=implode(',',$result[0]);
				return $a;
			}
			else
				return 0;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function datebackup($id,$db)
	{
		try
		{
$sql= "SELECT backup FROM backup WHERE WEB=$id";
			$result=$db->getResults($sql,array($id));
			if(count($result))
			{ $a=implode(',',$result[0]);
				return $a;
			}
			else
				return 0;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function updateBackup($id,$db,$time)
	{
		try
		{   $query="UPDATE backup SET backup='$time' WHERE WEB=$id";
			$db->commit($query);
			return 1;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return 0;
		}
		
	}
	
	
}