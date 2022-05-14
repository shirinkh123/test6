<?php
//Function which validates an email address
function checkdesc($desc,$errArray)
{
	if(empty($desc))
	{
		
		$errArray[]="desc can't be empty";
	
	}

}
function checkcategories($categories,$errArray)
{
	if(empty($categories))
	{$errArray[]="categories can't be empty";
	}
	
}

function checksub($type,$errArray)
{
	if(empty($sub))
		$errArray[]="sub cant be empty";	
}




?>