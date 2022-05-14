<?php
require_once "../Database/Database.php";
require_once "../Students/Student.php";	
require_once "../Teachers/Teachers.php";
class update
{
	public function insertstudent(Student $student,$db)
	{
		
		try
		{
			$query="INSERT INTO students(firstnames,lastnames,id_students,phones,emails,passwords)VALUES('".$student->getName()."','".$student->getlName()."','".$student->getIDS()."','".$student->getPHONE()."','".$student->getEMAIL()."','".$student->getpassword()."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function insertteacher(Teachers $Teachers,$db)
	{
		try
		{
			$query="INSERT INTO teachers(firstnamet,lastnamet,id_teachers,phonet,mailt,price,passwordt)VALUES('".$Teachers->getName()."','".$Teachers->getlName()."','".$Teachers->getIDS()."','".$Teachers->getPHONE()."','".$Teachers->getEMAIL()."','".$Teachers->getmkhir()."','".$Teachers->getpassword()."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function updateteacher(Teachers $Teachers,$db,$id)
	{
		$today=date("Y-m-d");
		
		
		try
		{
			$query="UPDATE teachers SET firstnamet='".$Teachers->getName()."',lastnamet='".$Teachers->getlName()."',phonet='".$Teachers->getPHONE()."',mailt='".$Teachers->getEMAIL()."',price='".$Teachers->getmkhir()."',passwordt='".$Teachers->getpassword()."',about='".$Teachers->getabout()."',date1='$today' WHERE id_teachers=$id";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function updatestudent(Student $Student,$db,$id)
	{
		$today=date("Y-m-d");
		try
		{
			$query="UPDATE students SET firstnames='".$Student->getName()."',lastnames='".$Student->getlName()."',phones='".$Student->getPHONE()."',emails='".$Student->getEMAIL()."',passwords='".$Student->getpassword()."',date1='$today' WHERE id_students=$id";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function updatestudent2(Student $Student,$db,$id)
	{
		$today=date("Y-m-d");
		try
		{
			$query="UPDATE students SET firstnames='".$Student->getName()."',lastnames='".$Student->getlName()."',phones='".$Student->getPHONE()."',emails='".$Student->getEMAIL()."',date1='$today' WHERE id_students=$id";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
    public function updateteacher2(Teachers $Teachers,$db,$id)
	{
		$today=date("Y-m-d");
		try
		{
			$query="UPDATE teachers SET firstnamet='".$Teachers->getName()."',lastnamet='".$Teachers->getlName()."',phonet='".$Teachers->getPHONE()."',mailt='".$Teachers->getEMAIL()."',price='".$Teachers->getmkhir()."',about='".$Teachers->getabout()."',date1='$today' WHERE id_teachers=$id";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function deletesubjectteacher($db,$id)
	{		try
		{
	  	$query="DELETE from subject WHERE subject_id=$id ";
			
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}


	public function deletesubjectstudent($db,$id)
	{		try
		{
	  	$query="DELETE from subjectstudent WHERE subject_ids=$id ";
			
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}

	public function insertsubjectteacher($name2,$subject,$db)
	{
		try
		{
			$query="INSERT INTO subject(subject_id,sub)VALUES('".$name2."','".$subject."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
		public function insertsubjectstudent($name2,$subject,$db)
	{
		try
		{
			$query="INSERT INTO subjectstudent(subject_ids,sub)VALUES('".$name2."','".$subject."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function deletecityteacher($db,$id)
	{		try
		{
	  	$query="DELETE from cities_teachers WHERE Id_te=$id ";
			
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}
	public function deletecitystudent($db,$id)
	{		try
		{
	  	$query="DELETE from cities_students WHERE id_s=$id ";
			
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}

		public function insertcitystudents($name2,$city,$db)
	{
		try
		{
			$query="INSERT INTO cities_students(id_s,city_s)VALUES('".$name2."','".$city."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
		public function insertcityteachers($name2,$city,$db)
	{
		try
		{
            $query="INSERT INTO cities_teachers(Id_te,city_t)VALUES('".$name2."','".$city."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
		public function inserteductionstudent($name2,$ed,$db)
	{
		try
		{
            $query="INSERT INTO edu_stud(id_eds,num_eds)VALUES('".$name2."','".$ed."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	public function deleteeductionteacher($db,$id)
	{
		try
		{
	  	$query="DELETE from edu_teacher WHERE edu_id=$id ";
			
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}
	public function deleteeductionstudent($db,$id)
	{
		try
		{
	  	$query="DELETE from edu_stud WHERE id_eds=$id ";
			
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		
	}
		public function inserteductionteacher($name2,$ed,$db)
	{
		try
		{
           $query="INSERT INTO edu_teacher(edu_id,edu_t)VALUES('".$name2."','".$ed."')";
			$db->commit($query);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
		public function checkstudent($ID,$db)
	{
		try
		{
           $query="SELECT * FROM students WHERE id_students=?";
			$result=$db->getResults($query,array($ID));
			if(count($result))
			    return true;
			else
				return false;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
		public function checkteacher($ID,$db)
	{
		try
		{
           $query="SELECT * FROM teachers WHERE id_teachers=?";
			$result=$db->getResults($query,array($ID));
			if(count($result))
			    return true;
			else
				return false;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	
	
	
	
}
