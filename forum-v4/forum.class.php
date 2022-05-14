<?php

class Forum1
{

/* function that inserts a new topic */
public function addTopic(Forum $Forum,$db)
{

$query ="INSERT INTO forums_main(id_forum,title,contents,id_sub,user_id,created)VALUES ('".$Forum->getIdforum()."','".$Forum->getTitle()."','".$Forum->getContents()."','".$Forum->getNamesub()."','".$Forum->getUser_id()."','".$Forum->getCreated()."')";

try
{
        $db->commit($query);
}
catch(PDOException $e)
{
die($e->getMessage());
} 
}




public function getidcategories($categories,$db)
{
	try
       
     {
           $query="SELECT id_sub FROM sub WHERE name_sub=$categories";
			$result=$db->getResults($query,array($categories));
			if(count($result))
			{ $a=implode(',',$result[0]);
				return $a;
			}
			
	}
		catch(PDOException $e)
	{
			echo $e->getMessage();
     }


       
}

} //end Forum class.
?> 