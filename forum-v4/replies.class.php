<?php

class Reply1
{


public function addReply(Reply $Reply,$db)
{

try
{$query = "INSERT INTO repleis(conteants,user_id,id_fourms,created) VALUES ('".$Reply->getContents()."','".$Reply->getUser_id()."','".$Reply->getIdforum()."','".$Reply->getCreated()."')";

    $db->commit($query);
}
catch(PDOException $e)
{
die("לא ניתן לרשום הרבה גרשיים נא  לרשום שנית");
} 
}



} //end Forum class.
?> 